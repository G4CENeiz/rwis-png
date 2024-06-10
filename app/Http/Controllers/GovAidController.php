<?php

namespace App\Http\Controllers;

use App\Models\Resident;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

use function PHPUnit\Framework\countOf;

class GovAidController extends Controller
{
    private static function filterResidentById($rt_id) {
        // pull resident data
        // $residentData = Resident::all();
        return Resident::select([
            'residents.resident_id',
            'families.family_id',
            'houses.house_id',
            'residents.name',
            DB::raw('FLOOR(DATEDIFF(CURDATE(), residents.birth_date) / 365.25) AS age'),
            'education_levels.education_level_id',
            DB::raw('
                CASE
                    WHEN professions.profession_id IN (1, 2, 5, 6) THEN 4
                    WHEN professions.profession_id IN (9, 10, 11, 12) THEN 3
                    WHEN professions.profession_id IN (3, 4, 7, 8) THEN 2
                    WHEN professions.profession_id IN (13, 14) THEN 1
                    ELSE 0
                END AS profession_matrix
            '),
            DB::raw('IF(residents.goverment_employees = 1, 2, 1) as goverment_employee'),
            'residents.income_range_id',
            'houses.building_area',
            DB::raw('fam.dependcy_count')
        ])
        ->join('professions', 'residents.profession_id', '=', 'professions.profession_id')
        ->join('income_ranges', 'residents.income_range_id', '=', 'income_ranges.income_range_id')
        ->join('education_levels', 'residents.education_level_id', '=', 'education_levels.education_level_id')
        ->join('families', 'residents.family_id', '=', 'families.family_id')
        ->join('houses', 'families.house_id', '=', 'houses.house_id')
        ->join(DB::raw('(
            SELECT 
                family_id, 
                COUNT(*) AS dependcy_count
            FROM 
                residents
            GROUP BY 
                family_id
        ) AS fam'), function($join) {
            $join->on('residents.family_id', '=', 'fam.family_id');
        })
        ->where('residents.family_member_status_id', 1)
        ->where('houses.domicile_rt', $rt_id)
        // ->orderBy('goverment_employee', 'ASC')
        ->get();
    }
    
    private static function filterResident() {
        // pull resident data
        // $residentData = Resident::all();
        return Resident::select([
            'residents.resident_id',
            'families.family_id',
            'houses.house_id',
            'residents.name',
            DB::raw('FLOOR(DATEDIFF(CURDATE(), residents.birth_date) / 365.25) AS age'),
            'education_levels.education_level_id',
            DB::raw('
                CASE
                    WHEN professions.profession_id IN (1, 2, 5, 6) THEN 4
                    WHEN professions.profession_id IN (9, 10, 11, 12) THEN 3
                    WHEN professions.profession_id IN (3, 4, 7, 8) THEN 2
                    WHEN professions.profession_id IN (13, 14) THEN 1
                    ELSE 0
                END AS profession_matrix
            '),
            DB::raw('IF(residents.goverment_employees = 1, 2, 1) as goverment_employee'),
            'residents.income_range_id',
            'houses.building_area',
            DB::raw('fam.dependcy_count')
        ])
        ->join('professions', 'residents.profession_id', '=', 'professions.profession_id')
        ->join('income_ranges', 'residents.income_range_id', '=', 'income_ranges.income_range_id')
        ->join('education_levels', 'residents.education_level_id', '=', 'education_levels.education_level_id')
        ->join('families', 'residents.family_id', '=', 'families.family_id')
        ->join('houses', 'families.house_id', '=', 'houses.house_id')
        ->join(DB::raw('(
            SELECT 
                family_id, 
                COUNT(*) AS dependcy_count
            FROM 
                residents
            GROUP BY 
                family_id
        ) AS fam'), function($join) {
            $join->on('residents.family_id', '=', 'fam.family_id');
        })
        ->where('residents.family_member_status_id', 1)
        // ->where('houses.domicile_rt', $rt_id)
        // ->orderBy('goverment_employee', 'ASC')
        ->get();
    }

    public function processDSS($rt_id = null) {
        // dd(static::filterResidentById());
        
        $query = ($rt_id != null) ? static::filterResidentById($rt_id) : static::filterResident();
        $alternatives = [];
        $decisionMatrix = [];
        $weight = [
            .05,
            .15,
            .05,
            .10,
            .30,
            .15,
            .20,
        ];

        foreach ($query as $resident) {
            $alternatives[] = [
                'name'          => $resident->name,
                'resident_id'   => $resident->resident_id,
                'family_id'     => $resident->family_id,
            ];
            $decisionMatrix[] = [
                'age' => $resident->age,
                'edu' => $resident->education_level_id,
                'pro' => $resident->profession_matrix,
                'gov' => $resident->goverment_employee,
                'inc' => $resident->income_range_id,
                'bld' => $resident->building_area,
                'dpn' => $resident->dependcy_count,
            ];
        }

        $normalization = [];
        $maxDM = max($decisionMatrix);
        $minDM = min($decisionMatrix);

        foreach ($decisionMatrix as $subArray) {
            foreach ($subArray as $key => $value) {
                // Update minimum value
                if (!isset($minDM[$key]) || $value < $minDM[$key]) {
                    $minDM[$key] = $value;
                }
                // Update maximum value
                if (!isset($maxDM[$key]) || $value > $maxDM[$key]) {
                    $maxDM[$key] = $value;
                }
            }
        }
        

        foreach ($decisionMatrix as $dm) {
            $normalization[] = [
                'age' => $dm['age'] / $maxDM['age'],
                'edu' => $minDM['edu'] / $dm['edu'],
                'pro' => $dm['pro'] / $maxDM['pro'],
                'gov' => $minDM['gov'] / $dm['gov'],
                'inc' => $minDM['inc'] / $dm['inc'],
                'bld' => $minDM['bld'] / $dm['bld'],
                'dpn' => $dm['dpn'] / $maxDM['dpn'],
            ];
        }

        // dd($maxDM);
        
        $weighted = [];
        
        foreach ($normalization as $norm) {
            $weighted[] = [
                $norm['age'] * $weight[0],
                $norm['edu'] * $weight[1],
                $norm['pro'] * $weight[2],
                $norm['gov'] * $weight[3],
                $norm['inc'] * $weight[4],
                $norm['bld'] * $weight[5],
                $norm['dpn'] * $weight[6],
            ];
        }

        $result = [];

        foreach ($weighted as $w) {
            $result[] = [
                $w[0] + $w[1] + $w[2] + $w[3] + $w[4] + $w[5] + $w[6]
            ];
        }
        
        for ($i=0; $i < count($alternatives); $i++) {
            array_push($alternatives[$i], reset($result[$i]));
        }
        
        usort($alternatives, function ($a, $b) {
            if ($a[0] == $b[0]) {
                return 0;
            }
            return ($a[0] > $b[0]) ? -1 : 1;
        });
        
        // dd($alternatives);
        // return $alternatives;

        return DataTables::of($alternatives)->addIndexColumn()->addColumn('action', function ($alternative) {
            $btn = '<a href="'.url('/administration/contribution/' . $alternative->contribution_id).'" class="btn btn-info btn-sm">Detail</a> ';
            $btn .= '<a href="'.url('/administration/contribution/' . $alternative->contribution_id . '/edit').'" class="btn btn-warning btn-sm">Edit</a> ';
            $btn .= '<form class="d-inline-block" method="POST" action="' . url('/administration/contribution/'.$alternative->contribution_id) . '">'
            . csrf_field()
            . method_field('DELETE')
            . '<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(\'Are you sure to delete this data?\');">Delete</button>' 
            . '</form>';
            return $btn;
        })->rawColumns(['action'])->make(true);
    }

    public function index() {
        $breadcrumb = (object) [
            'title' => 'Daftar Iuran',
            'list' => [
                [
                    'item'  => 'Administrasi',
                    'route' => 'administration.ledger.index'
                ],
                [
                    'item'  => 'Daftar Iuran',
                    'route' => 'administration.contribution.index'
                ],
            ],
        ];
        $card = (object) [
            'title' => 'Daftar Iuran yang ditagihkan'
        ];
        $page = [
            'title' => 'Daftar Iuran'
        ];
        return view(
            'bansos.index',
            [
                'breadcrumb' => $breadcrumb,
                'card' => $card,
                'page' => $page,
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
