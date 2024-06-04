<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReligionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $list = [
            'Islam', 
            'Protestan', 
            'Katolik', 
            'Hindu', 
            'Budha', 
            'Khonghucu',
        ];
        $data = [];
        for ($i=0; $i < count($list); $i++) {
            $data[] = [
                'religion_id'   => $i+1,
                'religion_name' => $list[$i],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }
        DB::table('religions')->insert($data);
    }
}
