<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FamilyMemberStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $list = [
            'Kepala Keluarga',
            'Istri',
            'Anak',
        ];
        $data = [];
        for ($i=0; $i < count($list); $i++) { 
            $data[] = [
                'family_member_status_id'   => $i+1,
                'family_member_status'      => $list[$i],
            ];
        }
        DB::table('family_member_statuses')->insert($data);
    }
}
