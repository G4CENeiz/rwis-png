<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $list = [
            'Tidak Bekerja',
            'Pelajar/Mahasiswa',
            'Swasta',
            'Wiraswasta',
            'Ibu Rumah Tangga',
            'Pensiunan',
            'TNI',
            'Polri',
            'Buruh',
            'Petani',
            'Nelayan',
            'Guru',
            'Dokter',
            'Pengacara',
        ];
        $data = [];
        for ($i=0; $i < count($list); $i++) { 
            $data[] = [
                'profession_id'     => $i+1,
                'profession_name'   => $list[$i],
            ];
        }
        DB::table('professions')->insert($data);
    }
}
