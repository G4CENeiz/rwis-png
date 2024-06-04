<?php

namespace Database\Seeders;

use App\Models\Village;
use Faker\Provider\id_ID\Person;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FamilySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];
        for ($i=0; $i < 10; $i++) {
            $birthDate  = fake()->dateTimeAD();
            $nkk = fake()->nik(Person::GENDER_MALE, $birthDate);
            $districtId = intval(substr((string) $nkk, 0, 6));
            $villageId = Village::where('district_id', (int) $districtId)->first();
            dd($districtId . Village::where('district_id', (int) $districtId)->first());
            $data[] = [
                'family_id'         => $i+1,
                'nkk'               => $nkk,
                'house_id'          => $i+1,
                'address_street'    => fake()->words(3, true),
                'address_rt'        => fake()->numberBetween(1, 10),
                'address_rw'        => fake()->numberBetween(1, 10),
                'village_id'        => $villageId->village_id,
                // ->first()->getKey(),
                // value('village_id'),
                'zip_code'          => fake()->randomNumber(5, true),
            ];
        }
        DB::table('families')->insert($data);
    }
}
