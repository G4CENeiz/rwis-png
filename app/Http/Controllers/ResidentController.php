<?php

namespace App\Http\Controllers;

use App\Models\Resident;
use App\Http\Requests\StoreResidentRequest;
use App\Http\Requests\UpdateResidentRequest;
use App\Models\City;
use App\Models\District;
use App\Models\EducationLevel;
use App\Models\Family;
use App\Models\FamilyMemberStatus;
use App\Models\IncomeRange;
use App\Models\MaritalStatus;
use App\Models\profession;
use App\Models\Province;
use Faker\Core\Blood;

class ResidentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $residents = Resident::with('religion', 'maritalStatus', 'profession')->get();
        return view('residential-information.index', compact('residents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $provinces = Province::all();
        $cities = City::all();
        $districts = District::class;
        $educationLevels = EducationLevel::all();
        $professions = profession::all();
        $incomeRanges = IncomeRange::all();
        $families = Family::all();
        $familyMemberStatuses = FamilyMemberStatus::all();
        $maritalStatuses = MaritalStatus::all();
        return view('residential-information.create', compact(
            'provinces', 'cities', 'districts',
            'educationLevels','professions',
            'incomeRanges', 'families', 'familyMemberStatuses',
            'maritalStatuses'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreResidentRequest $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'province_id' => 'required',
            'city_id' => 'required',
            'district_id' => 'required',
            'education_level_id' => 'required',
            'blood_type_id' => 'required',
            'profession_id' => 'required',
            'income_range_id' => 'required',
            'family_id' => 'required',
            'family_member_status_id' => 'required',
            'marital_status_id' => 'required',
        ]);
    
        Resident::create($validated);
        return redirect()->route('residential-information.index')->with('success', 'Penghuni baru berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Resident $resident)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Resident $resident)
    {
        $resident = Resident::findOrFail($resident);
        return view('information.edit', compact('resident'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateResidentRequest $request, Resident $resident)
    {
        $resident = Resident::findOrFail($resident);
        $resident->update($request->all());

    return redirect()->route('information.list')->with('success', 'Penghuni berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resident $resident)
    {
        $resident = Resident::findOrFail($resident);
        $resident->delete();

        return redirect()->route('information.list')->with('success', 'Data warga berhasil dihapus.');
    }
}
