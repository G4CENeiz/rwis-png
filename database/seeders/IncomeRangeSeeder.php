<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IncomeRangeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $start = 1_000_000;
        $lowerbound = 0;
        $upperbound = $start;
        $data = [];
        for ($i=0; $i < 10; $i++) {
            $data[] = [
                'income_range_id'   => $i+1,
                'lowerbound'        => $lowerbound,
                'upperbound'        => $upperbound,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
            $lowerbound = $upperbound;
            $upperbound += 1_300_000;
        }
        $data[] = [
            'income_range_id'   => count($data)+1,
            'lowerbound'        => $upperbound,
            'upperbound'        => 9_223_372_036_854_775_807,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        foreach (array_chunk($data, 100) as $in) {
            DB::table('income_ranges')->insert($in);
        }
    }
}
