<?php

namespace Database\Seeders;

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
        for ($i=0; $i < 10; $i++) {
            $data[] = [
                'house_id'          => $i+1,
                'house_group_id'    => 1,
                'land_area'         => fake()->randomNumber(3, false),
                'building_area'     => fake()->randomNumber(3, false),
                'domicile_street'   => fake()->words(3, true),
                'domicile_rt'       => 1,
                'domicile_rw'       => 1,
                'zip_code'          => 65100,
            ];
        }
        DB::table('houses')->insert($data);
    }
}
