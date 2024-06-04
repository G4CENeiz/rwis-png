<?php

namespace Database\Seeders;

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
            ];
            $lowerbound = $upperbound;
            $upperbound += 1_500_000;
        }
        $data[] = [
            'income_range_id'   => 11,
            'lowerbound'        => $upperbound,
            'upperbound'        => 9_223_372_036_854_775_807,
        ];
        DB::table('income_ranges')->insert($data);
    }
}
