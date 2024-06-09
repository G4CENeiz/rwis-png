<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GeneralLedgerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];
        $data[] = [
            'general_ledger_id' => 1,
            'issuer_id'         => 1,
            'issuer_type'       => '',
        ];
    }
}
