<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContributionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            [
                'contribution_name'     => 'Iuran Sampah',
                'description'           => 'DLH Tapi RW',
            ]
        ];
        DB::table('contribution_types')->insert($data);
    }
}
