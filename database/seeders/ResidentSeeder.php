<?php

namespace Database\Seeders;

use App\Models\City;
use Faker\Provider\id_ID\Person;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResidentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];
        for ($i=0; $i < 10; $i++) {
            // head of family data
            $isMale     = true;
            $birthDate  = fake()->dateTimeAD();
            $nik        = fake()->nik(($isMale) ? Person::GENDER_MALE : Person::GENDER_FEMALE, $birthDate);
            $cityCode   = intval(substr((string) $nik, 0, 4));
            $marriageDate = fake()->dateTimeInInterval('-50 years', '-5 years');
            $data[] = [
                'resident_id'               => $i+1,
                'nik'                       => $nik,
                'name'                      => fake()->name(($isMale) ? Person::GENDER_MALE : Person::GENDER_FEMALE),
                'birth_place'               => City::find($cityCode)->city_name,
                'birth_date'                => $birthDate,
                'gender'                    => ($isMale) ? 'L' : 'P',
                'religion_id'               => fake()->numberBetween(1, 6),
                'citizenship'               => (fake()->boolean(95) ? 'WNI' : 'WNA'),
                'education_level_id'        => fake()->numberBetween(1, 10),
                'blood_type'                => fake()->randomElement(['A', 'B', 'AB', 'O']),
                'profession_id'             => fake()->numberBetween(1, 15),
                'goverment_employees'       => fake()->boolean(),
                'income_range_id'           => fake()->numberBetween(1, 11),
                'family_id'                 => $i+1,
                'family_member_status_id'   => 1,
                'marital_status_id'         => 2,
                'marriage_date'             => $marriageDate,
            ];
            // wife data
            $isMale     = false;
            $birthDate  = fake()->dateTimeAD();
            $nik        = fake()->nik(($isMale) ? Person::GENDER_MALE : Person::GENDER_FEMALE, $birthDate);
            $cityCode   = intval(substr((string) $nik, 0, 4));
            $data[] = [
                'resident_id'               => $i+1,
                'nik'                       => $nik,
                'name'                      => fake()->name(($isMale) ? Person::GENDER_MALE : Person::GENDER_FEMALE),
                'birth_place'               => City::find($cityCode)->city_name,
                'birth_date'                => $birthDate,
                'gender'                    => ($isMale) ? 'L' : 'P',
                'religion_id'               => fake()->numberBetween(1, 6),
                'citizenship'               => (fake()->boolean(95) ? 'WNI' : 'WNA'),
                'education_level_id'        => fake()->numberBetween(1, 10),
                'blood_type'                => fake()->randomElement(['A', 'B', 'AB', 'O']),
                'profession_id'             => fake()->numberBetween(1, 15),
                'goverment_employees'       => fake()->boolean(),
                'income_range_id'           => fake()->numberBetween(1, 11),
                'family_id'                 => $i+1,
                'family_member_status_id'   => 2,
                'marital_status_id'         => 2,
                'marriage_date'             => $marriageDate,
            ];
        }
        for ($i=0; $i < 20; $i++) {
            // child data
            $isMale     = fake()->boolean();
            $birthDate  = fake()->dateTimeAD();
            $nik        = fake()->nik(($isMale) ? Person::GENDER_MALE : Person::GENDER_FEMALE, $birthDate);
            $cityCode   = intval(substr((string) $nik, 0, 4));
            $data[] = [
                'resident_id'               => $i+1,
                'nik'                       => $nik,
                'name'                      => fake()->name(($isMale) ? Person::GENDER_MALE : Person::GENDER_FEMALE),
                'birth_place'               => City::find($cityCode)->city_name,
                'birth_date'                => $birthDate,
                'gender'                    => ($isMale) ? 'L' : 'P',
                'religion_id'               => fake()->numberBetween(1, 6),
                'citizenship'               => (fake()->boolean(95) ? 'WNI' : 'WNA'),
                'education_level_id'        => fake()->numberBetween(1, 10),
                'blood_type'                => fake()->randomElement(['A', 'B', 'AB', 'O']),
                'profession_id'             => fake()->numberBetween(1, 15),
                'goverment_employees'       => fake()->boolean(),
                'income_range_id'           => fake()->numberBetween(1, 11),
                'family_id'                 => fake()->numberBetween(1, 10),
                'family_member_status_id'   => 3,
                'marital_status_id'         => 1,
                'marriage_date'             => null,
            ];
        }
        DB::table('residents')->insert($data);
    }
}
