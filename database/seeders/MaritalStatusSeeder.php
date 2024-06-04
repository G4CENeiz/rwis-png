<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaritalStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $list = [
            'Belum Kawin',
            'Kawin',
            'Duda/Janda',
            'Cerai',
        ];
        $data = [];
        for ($i=0; $i < count($list); $i++) {
            $data[] = [
                'marital_status_id'   => $i+1,
                'marital_status' => $list[$i],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }
        DB::table('marital_statuses')->insert($data);
    }
}
