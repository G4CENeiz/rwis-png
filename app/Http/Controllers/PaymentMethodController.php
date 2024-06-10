<?php

namespace App\Http\Controllers;

use App\Models\PaymentMethod;
use App\Http\Requests\StorePaymentMethodRequest;
use App\Http\Requests\UpdatePaymentMethodRequest;

class PaymentMethodController extends Controller
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
        return view(
            'administration.contribution.payment-method.index',
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

        return view(
            'administration.contribution.general-ledger.create', 
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
    public function store(StorePaymentMethodRequest $request)
    {
        //
        $validated = $request->validated();

        $validated = $request->safe()->only(['issuer_type','issuer_id']);
        $validated = $request->safe()->except(['issuer_type','issuer_id']);

        PaymentMethod::create([
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
        $generalLedger = PaymentMethod::find($id);
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
    public function update(UpdatePaymentMethodRequest $request, string $id)
    {
        //
        $validated = $request->validated();

        $validated = $request->safe()->only(['issuer_type','issuer_id']);
        $validated = $request->safe()->except(['issuer_type','issuer_id']);

        PaymentMethod::find($id)->update([
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
        $check = PaymentMethod::find($id);
        if (!$check) {
            return redirect('/administration/ledger')->with('error', 'Data Metode Pembayaran tidak ditemukan');
        }
        try {
            PaymentMethod::find($id)->update(['is_archived' => true]);
            return redirect('/administration/ledger')->with('success', 'Data Metode Pembayaran berhasil dihapus');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('/administration/ledger')->with('error', 'Data Metode Pembayaran gagal dihapus karena masih terdapat label lain yang terkait dengan data ini');
        }
    }
}
