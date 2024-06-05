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
        $zipCode = fake()->postcode();
        for ($jumlahRt=0; $jumlahRt < 10; $jumlahRt++) { 
            for ($houseGroup=0; $houseGroup < 5; $houseGroup++) {
                $streetAddress = \Faker\Provider\id_ID\Address::streetPrefix() ;
                $streetAddress .= ' ' . \Faker\Provider\id_ID\Address::street();
                for ($jumlahRumah=0; $jumlahRumah < 12; $jumlahRumah++) {
                    $data[] = [
                        'house_group_id'    => ($houseGroup+1)*($jumlahRt+1),
                        // 'land_area'         => fake()->biasedNumberBetween(60, 300, '\Faker\Provider\Biased::linearLow'),
                        // 'building_area'     => fake()->biasedNumberBetween(45, 400, '\Faker\Provider\Biased::linearLow'),
                        'land_area'         => fake()->biasedNumberBetween(70, 100, 'sqrt'),
                        'building_area'     => fake()->biasedNumberBetween(54, 120, 'sqrt'),
                        'domicile_street'   => $streetAddress . ' No. ' . \Faker\Provider\id_ID\Address::buildingNumber(),
                        'domicile_rt'       => $jumlahRt+1,
                        'domicile_rw'       => 1,
                        'zip_code'          => $zipCode,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ];
                }
            }
        }
        foreach (array_chunk($data,1000) as $in) {
            DB::table('houses')->insert($in);
        }
    }
}
