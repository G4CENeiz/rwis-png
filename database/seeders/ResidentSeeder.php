<?php

namespace Database\Seeders;

use App\Models\City;
use Carbon\Carbon;
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
        $districts = \App\Models\District::all();
        $districtIds = [];
        foreach ($districts as $district) {
            $districtIds[] = $district->district_id;
        }

        $data = [];
        $rtLim = 10;
        $hgLim = 5;
        $rmhLim = 12;
        for ($rt = 0; $rt < $rtLim; $rt++) {
            for ($hg = 0; $hg < $hgLim; $hg++) {
                for ($rmh = 0; $rmh < $rmhLim; $rmh++) {
                    // head of family data
                    $isMale     = true;
                    $birthDate  = fake()->dateTimeBetween('-80 years', '-35 years');
                    $districtId = fake()->randomElement($districtIds);
                    $nik = intval($districtId . $birthDate->format('dmy') . fake()->numerify('####'));
                    $nik = (string) $districtId;
                    $nik .= ($isMale) ? $birthDate->format('d') : $birthDate->format('d') + 40;
                    $nik .= $birthDate->format('my');
                    $nik .= fake()->numerify('####');
                    $nik = intval($nik);

                    $cityCode   = intval(substr((string) $nik, 0, 4));
                    $marriageDate = fake()->dateTimeBetween('-50 years', '-5 years');
                    $data[] = [
                        // 'resident_id'               => $i+1,
                        'nik'                       => $nik,
                        'name'                      => fake()->name(($isMale) ? Person::GENDER_MALE : Person::GENDER_FEMALE),
                        'birth_place'               => City::find($cityCode)->city_name,
                        'birth_date'                => $birthDate,
                        'gender'                    => ($isMale) ? 'Laki-laki' : 'Perempuan',
                        'religion_id'               => fake()->numberBetween(1, 6),
                        'citizenship'               => (fake()->boolean(95) ? 'WNI' : 'WNA'),
                        'education_level_id'        => fake()->numberBetween(1, 10),
                        'blood_type'                => fake()->randomElement(['A', 'B', 'AB', 'O']),
                        'profession_id'             => fake()->numberBetween(1, 14),
                        'goverment_employees'       => fake()->boolean(),
                        'income_range_id'           => fake()->numberBetween(1, 11),
                        'family_id'                 => ($hg*$rmhLim)+($rt*$rmhLim*$hgLim)+($rmh*1)+1,
                        'family_member_status_id'   => 1,
                        'marital_status_id'         => 2,
                        'marriage_date'             => $marriageDate,
                        'created_at'                => Carbon::now(),
                        'updated_at'                => Carbon::now(),
                    ];
                    // wife data
                    $isMale     = false;
                    $birthDate  = fake()->dateTimeBetween('-80 years', '-35 years');
                    $districtId = fake()->randomElement($districtIds);
                    $nik = intval($districtId . $birthDate->format('dmy') . fake()->numerify('####'));
                    $nik = (string) $districtId;
                    $nik .= ($isMale) ? $birthDate->format('d') : $birthDate->format('d') + 40;
                    $nik .= $birthDate->format('my');
                    $nik .= fake()->numerify('####');
                    $nik = intval($nik);

                    $cityCode   = intval(substr((string) $nik, 0, 4));
                    $data[] = [
                        // 'resident_id'               => $i+1,
                        'nik'                       => $nik,
                        'name'                      => fake()->name(($isMale) ? Person::GENDER_MALE : Person::GENDER_FEMALE),
                        'birth_place'               => City::find($cityCode)->city_name,
                        'birth_date'                => $birthDate,
                        'gender'                    => ($isMale) ? 'Laki-laki' : 'Perempuan',
                        'religion_id'               => fake()->numberBetween(1, 6),
                        'citizenship'               => (fake()->boolean(95) ? 'WNI' : 'WNA'),
                        'education_level_id'        => fake()->numberBetween(1, 10),
                        'blood_type'                => fake()->randomElement(['A', 'B', 'AB', 'O']),
                        'profession_id'             => fake()->numberBetween(1, 14),
                        'goverment_employees'       => fake()->boolean(),
                        'income_range_id'           => fake()->numberBetween(1, 11),
                        'family_id'                 => ($hg*$rmhLim)+($rt*$rmhLim*$hgLim)+($rmh*1)+1,
                        'family_member_status_id'   => 2,
                        'marital_status_id'         => 2,
                        'marriage_date'             => $marriageDate,
                        'created_at'                => Carbon::now(),
                        'updated_at'                => Carbon::now(),
                    ];
                    for ($i = 0; $i < 2; $i++) {
                        // child data
                        $isMale     = fake()->boolean();
                        $birthDate  = fake()->dateTimeBetween('-35 years', '-3 years');
                        $districtId = fake()->randomElement($districtIds);
                        $nik = intval($districtId . $birthDate->format('dmy') . fake()->numerify('####'));
                        $nik = (string) $districtId;
                        $nik .= ($isMale) ? $birthDate->format('d') : $birthDate->format('d') + 40;
                        $nik .= $birthDate->format('my');
                        $nik .= fake()->numerify('####');
                        $nik = intval($nik);

                        $cityCode   = intval(substr((string) $nik, 0, 4));
                        $data[] = [
                            // 'resident_id'               => $i+1,
                            'nik'                       => $nik,
                            'name'                      => fake()->name(($isMale) ? Person::GENDER_MALE : Person::GENDER_FEMALE),
                            'birth_place'               => City::find($cityCode)->city_name,
                            'birth_date'                => $birthDate,
                            'gender'                    => ($isMale) ? 'Laki-laki' : 'Perempuan',
                            'religion_id'               => fake()->numberBetween(1, 6),
                            'citizenship'               => (fake()->boolean(95) ? 'WNI' : 'WNA'),
                            'education_level_id'        => fake()->numberBetween(1, 10),
                            'blood_type'                => fake()->randomElement(['A', 'B', 'AB', 'O']),
                            'profession_id'             => fake()->numberBetween(1, 14),
                            'goverment_employees'       => fake()->boolean(),
                            'income_range_id'           => fake()->numberBetween(1, 11),
                            'family_id'                 => ($hg*$rmhLim)+($rt*$rmhLim*$hgLim)+1+fake()->numberBetween(1, 12),
                            'family_member_status_id'   => 3,
                            'marital_status_id'         => 1,
                            'marriage_date'             => null,
                            'created_at'                => Carbon::now(),
                            'updated_at'                => Carbon::now(),
                        ];
                    }
                }
            }
        }
        foreach (array_chunk($data, 1000) as $in) {
            DB::table('residents')->insert($in);
        }
    }
}
