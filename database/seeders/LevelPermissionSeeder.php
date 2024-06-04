<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LevelPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $list = [
            [1, 4, 5, 6, 7, 8],
            [2, 4, 5, 6, 7, 8],
            [3, 4, 5, 6, 7, 8],
        ];
        $data = [];
        for ($i=0; $i < count($list); $i++) {
            for ($j=0; $j < count($list[$i]); $j++) { 
                $data[] = [
                    'user_level_id'     => $i+1,
                    'permission_id'     => $list[$i][$j],
                ];
            }
        }
    }
}
