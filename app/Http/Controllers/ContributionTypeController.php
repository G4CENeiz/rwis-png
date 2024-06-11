<?php

namespace App\Http\Controllers;

use App\Models\ContributionType;
use App\Http\Requests\StoreContributionTypeRequest;
use App\Http\Requests\UpdateContributionTypeRequest;
use Yajra\DataTables\DataTables;

class ContributionTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $breadcrumb = (object) [
            'title' => 'Daftar Tipe Iuran',
            'list' => [
                [
                    'item'  => 'Administrasi',
                    'route' => 'administration.ledger.index'
                ],
                [
                    'item'  => 'Iuran',
                    'route' => 'administration.contribution.index'
                ],
                [
                    'item'  => 'Daftar Tipe Iuran',
                    'route' => 'administration.contribution.type.index'
                ],
            ],
        ];
        $card = (object) [
            'title' => 'Daftar Tipe Iuran yang ditagihkan'
        ];
        $page = [
            'title' => 'Daftar Tipe Iuran'
        ];
        return view(
            'administration.contribution.contribution-type.index',
            [
                'breadcrumb' => $breadcrumb,
                'card' => $card,
                'page' => $page,
            ]
        );
    }

    public function list() {
        $contributionTypes = ContributionType::select('contribution_type_id', 'contribution_name', 'description')
        ->where('is_archived', false)->get();
        return DataTables::of($contributionTypes)->addIndexColumn()->addColumn('action', function ($contributionType) {
            $btn = '<a href="'.url('/administration/contribution/type/' . $contributionType->contribution_type_id).'" class="btn btn-info btn-sm">Detail</a> ';
            $btn .= '<a href="'.url('/administration/contribution/type/' . $contributionType->contribution_type_id . '/edit').'" class="btn btn-warning btn-sm">Edit</a> ';
            $btn .= '<form class="d-inline-block" method="POST" action="' . url('/administration/contribution/type/'.$contributionType->contribution_type_id) . '">'
            . csrf_field()
            . method_field('DELETE')
            . '<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(\'Are you sure to delete this data?\');">Delete</button>' 
            . '</form>';
            return $btn;
        })->rawColumns(['action'])->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $breadcrumb = (object) [
            'title' => 'Tambah Tipe Iuran',
            'list' => [
                [
                    'item'  => 'Administrasi',
                    'route' => 'administration.ledger.index'
                ],
                [
                    'item'  => 'Iuran',
                    'route' => 'administration.contribution.index'
                ],
                [
                    'item'  => 'Tipe Iuran',
                    'route' => 'administration.contribution.type.index'
                ],
                [
                    'item'  => 'Tambah Tipe Iuran',
                    'route' => 'administration.contribution.type.create'
                ],
            ],
        ];
        $card = (object) [
            'title' => 'Tambah Tipe Iuran'
        ];
        $page = [
            'title' => 'Tambah Tipe Iuran'
        ];

        return view(
            'administration.contribution.contribution-type.create', 
            [
                'breadcrumb' => $breadcrumb,
                'card' => $card,
                'page' => $page,
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContributionTypeRequest $request)
    {
        //
        $validated = $request->validated();

        $validated = $request->safe()->only(['contribution_name','description']);
        $validated = $request->safe()->except(['contribution_name','description']);

        ContributionType::create([
            'contribution_name' => $validated['contribution_name'],
            'description' => $validated['description'],
        ]);

        return redirect('/administration/contribution/type/');
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
        $contributionTypes = ContributionType::find($id);
        $breadcrumb = (object) [
            'title' => 'Ubah Tipe Iuran',
            'list' => [
                [
                    'item'  => 'Administrasi',
                    'route' => 'administration.ledger.index'
                ],
                [
                    'item'  => 'Tipe Iuran',
                    'route' => 'administration.ledger.index'
                ],
                [
                    'item'  => 'Ubah Tipe Iuran',
                    'route' => 'administration.ledger.create'
                ],
            ],
        ];
        $card = (object) [
            'title' => 'Ubah Tipe Iuran'
        ];
        $page = [
            'title' => 'Ubah Tipe Iuran'
        ];

        return view(
            'administration.contribution.contribution-type.edit', 
            [
                'breadcrumb' => $breadcrumb,
                'card' => $card,
                'page' => $page,
                'contributionTypes' => $contributionTypes,
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContributionTypeRequest $request, string $id)
    {
        //
        $validated = $request->validated();

        $validated = $request->safe()->only(['issuer_type','issuer_id']);
        $validated = $request->safe()->except(['issuer_type','issuer_id']);

        ContributionType::find($id)->update([
            'issuer_id' => $validated['issuer_id'],
            'issuer_type' => $validated['issuer_type'],
        ]);


        return redirect('/administration/contribution/type/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $check = ContributionType::find($id);
        if (!$check) {
            return redirect('/administration/contribution/type/')->with('error', 'Data Tipe Iuran tidak ditemukan');
        }
        try {
            ContributionType::find($id)->update(['is_archived' => true]);
            return redirect('/administration/contribution/type/')->with('success', 'Data Tipe Iuran berhasil dihapus');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('/administration/contribution/type/')->with('error', 'Data Tipe Iuran gagal dihapus karena masih terdapat label lain yang terkait dengan data ini');
        }
    }
}
