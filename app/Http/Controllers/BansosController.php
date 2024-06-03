<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BansosController extends Controller
{
    // Fungsi untuk menghitung nilai akhir menggunakan SAW
    public function calculateSAW($data)
{
    // Bobot untuk masing-masing kriteria
    $weights = array(
        'Jumlah Tanggungan' => 5,
        'Penghasilan Perbulan' => 5,
        'Pekerjaan' => 3,
        'Kondisi Rumah' => 4,
        'Usia' => 2
    );

    // Normalisasi data
    $normalizedData = array();
    foreach ($data as $key => $value) {
        $columnData = array_column($data, $key);
        // Cek apakah array kosong
        if (empty($columnData)) {
            $normalizedData[$key] = 0;
        } elseif (in_array($key, ['Jumlah Tanggungan', 'Pekerjaan', 'Kondisi Rumah', 'Usia'])) {
            $max = max($columnData);
            $normalizedData[$key] = $max > 0 ? $value / $max : 0;
        } else {
            $min = min($columnData);
            $normalizedData[$key] = $min > 0 ? $min / $value : 0;
        }
    }

    // Hitung nilai akhir
    $totalScore = 0;
    foreach ($normalizedData as $key => $value) {
        $totalScore += $value * $weights[$key];
    }

    return $totalScore;
}

    // Contoh penggunaan
    public function index()
    {
        // Contoh data calon penerima
        $calon1 = array(
            'Jumlah Tanggungan' => 4,
            'Penghasilan Perbulan' => 1800000,
            'Pekerjaan' => 5,
            'Kondisi Rumah' => 5,
            'Usia' => 65
        );

        $calon2 = array(
            'Jumlah Tanggungan' => 2,
            'Penghasilan Perbulan' => 3500000,
            'Pekerjaan' => 4,
            'Kondisi Rumah' => 4,
            'Usia' => 42
        );

        $calon3 = array(
            'Jumlah Tanggungan' => 6,
            'Penghasilan Perbulan' => 900000,
            'Pekerjaan' => 5,
            'Kondisi Rumah' => 5,
            'Usia' => 55
        );

        // Hitung nilai akhir untuk masing-masing calon
        $nilaiCalon1 = $this->calculateSAW($calon1);
        $nilaiCalon2 = $this->calculateSAW($calon2);
        $nilaiCalon3 = $this->calculateSAW($calon3);

        // Urutkan calon berdasarkan nilai akhir
        $calonList = array(
            array('Calon' => 1, 'Nilai' => $nilaiCalon1),
            array('Calon' => 2, 'Nilai' => $nilaiCalon2),
            array('Calon' => 3, 'Nilai' => $nilaiCalon3)
        );
        usort($calonList, function($a, $b) {
            return $b['Nilai'] - $a['Nilai'];
        });

        // Tampilkan hasil
        return view('bansos.index', compact('calonList'));
    }
}                                                                              