<?php

namespace App\Http\Controllers;

use App\Models\Resident;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $residents = Resident::paginate(10); // 10 data per halaman
        return view('home.index', compact('residents'));
    }

    public function dashboard()
    {
        return view('home.dashboard');
    }
}
