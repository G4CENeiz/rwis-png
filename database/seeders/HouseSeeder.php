<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];
        $rtLim = 3;
        $hgLim = 3;
        $rmhLim = 8;
        $zipCode = fake('id_ID')->postcode();
        for ($rt = 0; $rt < $rtLim; $rt++) {
            for ($hg = 0; $hg < $hgLim; $hg++) {
                $streetAddress = fake('id_ID')->streetPrefix();
                $streetAddress .= ' ' . fake('id_ID')->street();
                for ($rmh = 0; $rmh < $rmhLim; $rmh++) {
                    $data[] = [
                        'house_group_id'    => ($hg * 1) + ($rt * $hgLim) + 1,
                        'land_area'         => fake()->biasedNumberBetween(70, 100, 'sqrt'),
                        'building_area'     => fake()->biasedNumberBetween(54, 120, 'sqrt'),
                        'domicile_street'   => $streetAddress . ' No. ' . fake('id_ID')->buildingNumber(),
                        'domicile_rt'       => $rt + 1,
                        'domicile_rw'       => 1,
                        'zip_code'          => $zipCode,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ];
                }
            }
        }
        foreach (array_chunk($data, 1000) as $in) {
            DB::table('houses')->insert($in);
        }
    }
}
