<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UMKMController extends Controller
{
    public function index()
    {
        return view('rw.umkm.index');
    }
}
