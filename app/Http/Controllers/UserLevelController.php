<?php

namespace App\Http\Controllers;

use App\Models\UserLevel;
use App\Http\Requests\StoreUserLevelRequest;
use App\Http\Requests\UpdateUserLevelRequest;

class UserLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $breadcrumb = (object) [
            'title' => 'Daftar pengguna',
            'list' => [
                [
                    'item'  => 'Sistem',
                    'route' => 'administration.ledger.index'
                ],
                [
                    'item'  => 'otoritasi',
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
            'administration.contribution.contribution.index',
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
    public function store(StoreUserLevelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(UserLevel $userLevel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserLevel $userLevel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserLevelRequest $request, UserLevel $userLevel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserLevel $userLevel)
    {
        //
    }
}
