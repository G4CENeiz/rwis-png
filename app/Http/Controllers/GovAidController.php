<?php

namespace App\Http\Controllers;

use App\Models\Resident;
use Illuminate\Http\Request;

class GovAidController extends Controller
{
    private $residentData;
    
    private function filterResident() {
        // pull resident data
        $residentData = Resident::all()
        ->where('income_range_id', '<=', 2);
    }

    public function processDSS() {
        // 
    }
}
