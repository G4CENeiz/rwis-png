<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HouseGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];
        for ($jumlahRt=0; $jumlahRt < 10; $jumlahRt++) { 
            for ($houseGroup=0; $houseGroup < 5; $houseGroup++) { 
                $data[] = [
                    // 'house_group_id'    => ($houseGroup+1)*($jumlahRt+1),
                    'created_at'        => Carbon::now(),
                    'updated_at'        => Carbon::now(),
                ];
            }
        }
        foreach (array_chunk($data,1000) as $in) {
            DB::table('house_groups')->insert($in);
        }
    }
}
