<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $list = [
            'Tingkat Sistem',
            'Tingkat RW',
            'Tingkat RT',
            'Kelola Sistem',
            'Kelola Administrasi',
            'Kelola Warga',
            'Kelola Media',
            'Kelola Bansos',
        ];
        $data = [];
        for ($i=0; $i < count($list); $i++) { 
            $data[] = [
                'permission_id'     => $i+1,
                'permission_name'   => $list[$i],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }
        DB::table('permissions')->insert($data);
    }
}
