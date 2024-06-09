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
        $rtLim = 3;
        $hgLim = 3;
        $rmhLim = 8;
        for ($rt=0; $rt < $rtLim; $rt++) { 
            for ($hg=0; $hg < $hgLim; $hg++) { 
                $data[] = [
                    // 'house_group_id'    => ($hg+1)*($rt+1),
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
