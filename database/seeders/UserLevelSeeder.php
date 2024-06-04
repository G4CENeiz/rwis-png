<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $list = [
            'Admin Sistem',
            'Ketua Rukun Tetangga',
            'Ketua Rukun Warga',
        ];
        $data = [];
        for ($i=0; $i < count($list); $i++) { 
            $data[] = [
                'user_level_id'     => $i+1,
                'user_level_name'   => $list[$i],
            ];
        }
    }
}
