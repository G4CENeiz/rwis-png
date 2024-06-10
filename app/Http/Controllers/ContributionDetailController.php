<?php

namespace App\Http\Controllers;

use App\Models\ContributionDetail;
use App\Http\Requests\StoreContributionDetailRequest;
use App\Http\Requests\UpdateContributionDetailRequest;

class ContributionDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $breadcrumb = (object) [
            'title' => 'Daftar Detail Iuran',
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
                    'item'  => 'Detail Iuran',
                    'route' => 'administration.contribution.detail.index'
                ],
            ],
        ];
        $card = (object) [
            'title' => 'Daftar Detail Iuran yang ditagihkan'
        ];
        $page = [
            'title' => 'Daftar Detail Iuran'
        ];
        return view(
            'administration.contribution.contribution-detail.index',
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
                    'item'  => 'Detail Iuran',
                    'route' => 'administration.contribution.detail.index'
                ],
                [
                    'item'  => 'Tambah Iuran',
                    'route' => 'administration.contribution.detail.create'
                ],
            ],
        ];
        $card = (object) [
            'title' => 'Tambah Iuran'
        ];
        $page = [
            'title' => 'Tambah Iuran'
        ];

        return view(
            'administration.contribution.contribution-detail.create', 
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
    public function store(StoreContributionDetailRequest $request)
    {
        //
        $validated = $request->validated();

        $validated = $request->safe()->only(['issuer_type','issuer_id']);
        $validated = $request->safe()->except(['issuer_type','issuer_id']);

        ContributionDetail::create([
            'issuer_id' => $validated['issuer_id'],
            'issuer_type' => $validated['issuer_type'],
        ]);

        return redirect('/administration/contribution/detail');
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
        $generalLedger = ContributionDetail::find($id);
        $breadcrumb = (object) [
            'title' => 'Ubah Iuran',
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
                    'item'  => 'Detail Iuran',
                    'route' => 'administration.contribution.detail.index'
                ],
                [
                    'item'  => 'Edit Iuran',
                    'route' => 'administration.contribution.detail.create'
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
            'administration.contribution.contribution-detail.edit', 
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
    public function update(UpdateContributionDetailRequest $request, string $id)
    {
        //
        $validated = $request->validated();

        $validated = $request->safe()->only(['issuer_type','issuer_id']);
        $validated = $request->safe()->except(['issuer_type','issuer_id']);

        ContributionDetail::find($id)->update([
            'issuer_id' => $validated['issuer_id'],
            'issuer_type' => $validated['issuer_type'],
        ]);


        return redirect('/administration/contribution/detail/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $check = ContributionDetail::find($id);
        if (!$check) {
            return redirect('/administration/contribution/detail/')->with('error', 'Data Detail Iuran tidak ditemukan');
        }
        try {
            ContributionDetail::find($id)->update(['is_archived' => true]);
            return redirect('/administration/contribution/detail/')->with('success', 'Data Detail Iuran berhasil dihapus');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('/administration/contribution/detail/')->with('error', 'Data Detail Iuran gagal dihapus karena masih terdapat label lain yang terkait dengan data ini');
        }
    }
}
