<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $list = [
            [
                11,
                12,
                13,
                14,
                15,
                16,
                17,
                18,
                19,
                21,
                31,
                32,
                33,
                34,
                35,
                36,
                51,
                52,
                53,
                61,
                62,
                63,
                64,
                65,
                71,
                72,
                73,
                74,
                75,
                76,
                81,
                82,
                91,
                92,
                93,
                94,
                95
            ],
            [
                'ACEH',
                'SUMATERA UTARA',
                'SUMATERA BARAT',
                'RIAU',
                'JAMBI',
                'SUMATERA SELATAN',
                'BENGKULU',
                'LAMPUNG',
                'KEPULAUAN BANGKA BELITUNG',
                'KEPULAUAN RIAU',
                'DKI JAKARTA',
                'JAWA BARAT',
                'JAWA TENGAH',
                'DAERAH ISTIMEWA YOGYAKARTA',
                'JAWA TIMUR',
                'BANTEN',
                'BALI',
                'NUSA TENGGARA BARAT',
                'NUSA TENGGARA TIMUR',
                'KALIMANTAN BARAT',
                'KALIMANTAN TENGAH',
                'KALIMANTAN SELATAN',
                'KALIMANTAN TIMUR',
                'KALIMANTAN UTARA',
                'SULAWESI UTARA',
                'SULAWESI TENGAH',
                'SULAWESI SELATAN',
                'SULAWESI TENGGARA',
                'GORONTALO',
                'SULAWESI BARAT',
                'MALUKU',
                'MALUKU UTARA',
                'PAPUA',
                'PAPUA BARAT',
                'PAPUA SELATAN',
                'PAPUA TENGAH',
                'PAPUA PEGUNUNGAN'
            ],
        ];
        $data = [];
        for ($i=0; $i < sizeof($list); $i++) { 
            $data[] = [
                'id_mendagri' => $list[$i][0],
                'province_name' => $list[$i][1],
            ];
        }
        DB::table('GovProvince')->insert($data);
    }
}
