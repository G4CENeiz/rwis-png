<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EducationLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $list = [
            'Tidak/Belum Sekolah',
            'Belum Tamat SD/Sederajat',
            'Tamat SD/Sederajat',
            'SLTP/Sederajat',
            'SLTA/Sederajat',
            'Diploma I/II',
            'Akademi/Diploma III/S.Muda',
            'Diploma IV/Strata I',
            'Strata II',
            'Strata III',
        ];
        $data = [];
        for ($i=0; $i < count($list); $i++) {
            $data[] = [
                'education_level_id'   => $i+1,
                'education_level_name' => $list[$i],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }
        DB::table('education_levels')->insert($data);
    }
}
