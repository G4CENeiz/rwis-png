<?php

namespace App\Http\Controllers;

use App\Models\Contribution;
use App\Http\Requests\StoreContributionRequest;
use App\Http\Requests\UpdateContributionRequest;
use Illuminate\Http\Request;

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
        return view(
            'administration.contribution.contribution.index',
            [
                'breadcrumb' => $breadcrumb,
                'card' => $card,
                'page' => $page,
            ]
        );
    }

    public function list(Request $request) {
        $contributions = Contribution::all()->with('level')->get();
        if ($request->level_id) {
            $contributions = $contributions->where('level_id', $request->level_id);
        }
        // return DataTables::of($contributions)->addIndexColumn()->addColumn('action', function ($user) {
        //         $btn = '<a href="'.url('/user/' . $user->user_id).'" class="btn btn-info btn-sm">Detail</a> ';
        //         $btn .= '<a href="'.url('/user/' . $user->user_id . '/edit').'" class="btn btn-warning btn-sm">Edit</a> ';
        //         $btn .= '<form class="d-inline-block" method="POST" action="' . url('/user/'.$user->user_id) . '">'
        //         . csrf_field()
        //         . method_field('DELETE')
        //         . '<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(\'Are you sure to delete this data?\');">Delete</button>' 
        //         . '</form>';
        //         return $btn;
        //     })->rawColumns(['action'])->make(true);
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
    public function store(StoreContributionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Contribution $contribution)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contribution $contribution)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContributionRequest $request, Contribution $contribution)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contribution $contribution)
    {
        //
    }
}
