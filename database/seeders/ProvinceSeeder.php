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
        $filePath = storage_path('app/provinces.csv'); // Adjust path as needed

        // Open and read the .csv file
        $file = fopen($filePath, 'r');
        if ($file === false) {
            throw new \Exception("Could not open the file at {$filePath}");
        }

        // Read the header row
        $header = fgetcsv($file, null, ';');
        $header = ['province_id','province_name',];

        // Initialize an array to hold the data
        $data = [];

        // Loop through each row in the .csv file
        while (($row = fgetcsv($file, null, ';')) !== false) {
            // Combine the header with the row values
            $rowData = array_combine($header, $row);
            $data[] = $rowData;
        }

        // Close the file
        fclose($file);

        foreach (array_chunk($data,1000) as $in) {
            DB::table('provinces')->insert($in);
        }
    }
}
