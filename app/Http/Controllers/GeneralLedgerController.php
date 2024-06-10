<?php

namespace App\Http\Controllers;

use App\Models\GeneralLedger;
use App\Http\Requests\StoreGeneralLedgerRequest;
use App\Http\Requests\UpdateGeneralLedgerRequest;
use App\Models\User;

class GeneralLedgerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $breadcrumb = (object) [
            'title' => 'Daftar Buku Kas',
            'list' => [
                [
                    'item'  => 'Administrasi',
                    'route' => 'administration.ledger.index'
                ],
                [
                    'item'  => 'Daftar Buku Kas',
                    'route' => 'administration.ledger.index'
                ],
            ],
        ];
        $card = (object) [
            'title' => 'Daftar Buku Kas'
        ];
        $page = [
            'title' => 'Daftar Buku Kas'
        ];
        return view(
            'administration.contribution.general-ledger.index',
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
        $breadcrumb = (object) [
            'title' => 'Tambah Buku Kas',
            'list' => [
                [
                    'item'  => 'Administrasi',
                    'route' => 'administration.ledger.index'
                ],
                [
                    'item'  => 'Buku Kas',
                    'route' => 'administration.ledger.index'
                ],
                [
                    'item'  => 'Tambah Buku Kas',
                    'route' => 'administration.ledger.create'
                ],
            ],
        ];
        $card = (object) [
            'title' => 'Tambah Buku Kas'
        ];
        $page = [
            'title' => 'Tambah Buku Kas'
        ];

        $user = User::all();

        return view(
            'administration.contribution.general-ledger.create', 
            [
                'breadcrumb' => $breadcrumb,
                'card' => $card,
                'page' => $page,
                'user' => $user
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGeneralLedgerRequest $request)
    {
        //
        $validated = $request->validated();

        $validated = $request->safe()->only(['issuer_type','issuer_id']);
        $validated = $request->safe()->except(['issuer_type','issuer_id']);

        GeneralLedger::create([
            'issuer_id' => $validated['issuer_id'],
            'issuer_type' => $validated['issuer_type'],
        ]);


        return redirect('/administration/ledger');
    }

    /**
     * Display the specified resource.
     */
    public function show(GeneralLedger $generalLedger)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $generalLedger = GeneralLedger::find($id);
        $breadcrumb = (object) [
            'title' => 'Ubah Buku Kas',
            'list' => [
                [
                    'item'  => 'Administrasi',
                    'route' => 'administration.ledger.index'
                ],
                [
                    'item'  => 'Buku Kas',
                    'route' => 'administration.ledger.index'
                ],
                [
                    'item'  => 'Ubah Buku Kas',
                    'route' => 'administration.ledger.create'
                ],
            ],
        ];
        $card = (object) [
            'title' => 'Ubah Buku Kas'
        ];
        $page = [
            'title' => 'Ubah Buku Kas'
        ];

        $user = User::all();

        return view(
            'administration.contribution.general-ledger.edit', 
            [
                'breadcrumb' => $breadcrumb,
                'card' => $card,
                'page' => $page,
                'user' => $user,
                'generalLedger' => $generalLedger,
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGeneralLedgerRequest $request, string $id)
    {
        //
        $validated = $request->validated();

        $validated = $request->safe()->only(['issuer_type','issuer_id']);
        $validated = $request->safe()->except(['issuer_type','issuer_id']);

        GeneralLedger::find($id)->update([
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
        $check = GeneralLedger::find($id);
        if (!$check) {
            return redirect('/administration/ledger')->with('error', 'Data Buku Kas tidak ditemukan');
        }
        try {
            GeneralLedger::find($id)->update(['is_archived' => true]);
            return redirect('/administration/ledger')->with('success', 'Data Buku Kas berhasil dihapus');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('/administration/ledger')->with('error', 'Data Buku Kas gagal dihapus karena masih terdapat label lain yang terkait dengan data ini');
        }
    }
}
