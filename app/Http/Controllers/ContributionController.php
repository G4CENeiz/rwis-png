<?php

namespace App\Http\Controllers;

use App\Models\Contribution;
use App\Http\Requests\StoreContributionRequest;
use App\Http\Requests\UpdateContributionRequest;
use App\Models\Family;
use App\Models\GeneralLedger;
use App\Models\Resident;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ContributionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $generalLedger = GeneralLedger::all();
        $family = Family::all();
        return view(
            'administration.contribution.contribution.index',
            [
                'breadcrumb' => $breadcrumb,
                'card' => $card,
                'page' => $page,
                'generalLedger' => $generalLedger,
                'family' => $family,
            ]
        );
    }

    public function list(Request $request) {
        $contributions = Contribution::select('recipient_id', 'general_ledger_id', 'recipient_type')->get();
            // ->join();
            // ->with('generalLedger')
            // ->with('family')
        if ($request->general_ledger_id) {
            $contributions = $contributions->where('general_ledger_id', $request->general_ledger_id);
        }
        if ($request->recipient_id) {
            $contributions = $contributions->where('recipient_id', $request->family_id);
        }
        return DataTables::of($contributions)->addIndexColumn()->addColumn('action', function ($contribution) {
                $btn = '<a href="'.url('/administration/contribution/' . $contribution->contribution_id).'" class="btn btn-info btn-sm">Detail</a> ';
                $btn .= '<a href="'.url('/administration/contribution/' . $contribution->contribution_id . '/edit').'" class="btn btn-warning btn-sm">Edit</a> ';
                $btn .= '<form class="d-inline-block" method="POST" action="' . url('/administration/contribution/'.$contribution->contribution_id) . '">'
                . csrf_field()
                . method_field('DELETE')
                . '<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(\'Are you sure to delete this data?\');">Delete</button>' 
                . '</form>';
                return $btn;
            })->rawColumns(['action'])->make(true);
        // return 'hello';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $breadcrumb = (object) [
            'title' => 'Tambah Iuran',
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
                    'item'  => 'Tambah Iuran',
                    'route' => 'administration.contribution.create'
                ],
            ],
        ];
        $card = (object) [
            'title' => 'Tambah Iuran'
        ];
        $page = [
            'title' => 'Tambah Iuran'
        ];
        $residents = Resident::all()->where('is_archived', false);

        return view(
            'administration.contribution.contribution.create', 
            [
                'breadcrumb' => $breadcrumb,
                'card' => $card,
                'page' => $page,
                'residents' => $residents,
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContributionRequest $request)
    {
        //
        $validated = $request->validated();

        $validated = $request->safe()->only(['issuer_type','issuer_id']);
        $validated = $request->safe()->except(['issuer_type','issuer_id']);

        Contribution::create([
            'issuer_id' => $validated['issuer_id'],
            'issuer_type' => $validated['issuer_type'],
        ]);

        return redirect('/administration/ledger');
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
        $generalLedger = Contribution::find($id);
        $breadcrumb = (object) [
            'title' => 'Ubah Iuran',
            'list' => [
                [
                    'item'  => 'Administrasi',
                    'route' => 'administration.ledger.index'
                ],
                [
                    'item'  => 'Iuran',
                    'route' => 'administration.ledger.index'
                ],
                [
                    'item'  => 'Ubah Iuran',
                    'route' => 'administration.ledger.create'
                ],
            ],
        ];
        $card = (object) [
            'title' => 'Ubah Iuran'
        ];
        $page = [
            'title' => 'Ubah Iuran'
        ];

        return view(
            'administration.contribution.general-ledger.edit', 
            [
                'breadcrumb' => $breadcrumb,
                'card' => $card,
                'page' => $page,
                'generalLedger' => $generalLedger,
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContributionRequest $request, string $id)
    {
        //
        $validated = $request->validated();

        $validated = $request->safe()->only(['issuer_type','issuer_id']);
        $validated = $request->safe()->except(['issuer_type','issuer_id']);

        Contribution::find($id)->update([
            'issuer_id' => $validated['issuer_id'],
            'issuer_type' => $validated['issuer_type'],
        ]);


        return redirect('/administration/ledger');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $check = Contribution::find($id);
        if (!$check) {
            return redirect('/administration/ledger')->with('error', 'Data Iuran tidak ditemukan');
        }
        try {
            Contribution::find($id)->update(['is_archived' => true]);
            return redirect('/administration/ledger')->with('success', 'Data Iuran berhasil dihapus');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('/administration/ledger')->with('error', 'Data Iuran gagal dihapus karena masih terdapat label lain yang terkait dengan data ini');
        }
    }
}
