<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Http\Requests\StorePaymentRequest;
use App\Http\Requests\UpdatePaymentRequest;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $breadcrumb = (object) [
            'title' => 'Daftar Pembayaran',
            'list' => [
                [
                    'item'  => 'Administrasi',
                    'route' => 'administration.ledger.index'
                ],
                [
                    'item'  => 'Daftar Pembayaran',
                    'route' => 'administration.payement.index'
                ],
            ],
        ];
        $card = (object) [
            'title' => 'Daftar Pembayaran'
        ];
        $page = [
            'title' => 'Daftar Pembayaran'
        ];
        return view(
            'administration.contribution.payment.index',
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
            'title' => 'Tambah Pembayaran',
            'list' => [
                [
                    'item'  => 'Administrasi',
                    'route' => 'administration.ledger.index'
                ],
                [
                    'item'  => 'Daftar Pembayaran',
                    'route' => 'administration.payement.index'
                ],
                [
                    'item'  => 'Tambah Pembayaran',
                    'route' => 'administration.payement.create'
                ],
            ],
        ];
        $card = (object) [
            'title' => 'Tambah Pembayaran'
        ];
        $page = [
            'title' => 'Tambah Pembayaran'
        ];

        return view(
            'administration.contribution.payment.create', 
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
    public function store(StorePaymentRequest $request)
    {
        //
        $validated = $request->validated();

        $validated = $request->safe()->only(['issuer_type','issuer_id']);
        $validated = $request->safe()->except(['issuer_type','issuer_id']);

        Payment::create([
            'issuer_id' => $validated['issuer_id'],
            'issuer_type' => $validated['issuer_type'],
        ]);

        return redirect('/administration/payement');
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
        $generalLedger = Payment::find($id);
        $breadcrumb = (object) [
            'title' => 'Ubah Pembayaran',
            'list' => [
                [
                    'item'  => 'Administrasi',
                    'route' => 'administration.ledger.index'
                ],
                [
                    'item'  => 'Pembayaran',
                    'route' => 'administration.payement.index'
                ],
                [
                    'item'  => 'Ubah Pembayaran',
                    'route' => 'administration.payement.edit'
                ],
            ],
        ];
        $card = (object) [
            'title' => 'Ubah Pembayaran'
        ];
        $page = [
            'title' => 'Ubah Pembayaran'
        ];

        return view(
            'administration.contribution.payment.edit', 
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
    public function update(UpdatePaymentRequest $request, string $id)
    {
        //
        $validated = $request->validated();

        $validated = $request->safe()->only(['issuer_type','issuer_id']);
        $validated = $request->safe()->except(['issuer_type','issuer_id']);

        Payment::find($id)->update([
            'issuer_id' => $validated['issuer_id'],
            'issuer_type' => $validated['issuer_type'],
        ]);


        return redirect('/administration/payement');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $check = Payment::find($id);
        if (!$check) {
            return redirect('/administration/payement')->with('error', 'Data Pembayaran tidak ditemukan');
        }
        try {
            Payment::find($id)->update(['is_archived' => true]);
            return redirect('/administration/payement')->with('success', 'Data Pembayaran berhasil dihapus');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('/administration/payement')->with('error', 'Data Pembayaran gagal dihapus karena masih terdapat label lain yang terkait dengan data ini');
        }
    }
}
