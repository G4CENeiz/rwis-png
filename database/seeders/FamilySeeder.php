<?php

namespace Database\Seeders;

use App\Models\Village;
use Carbon\Carbon;
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
            $isMale = true;
            $birthDate  = fake()->dateTimeAD();

            $districts = \App\Models\District::all();
            $districtIds = [];
            foreach ($districts as $district) {
                $districtIds[] = $district->district_id;
            }
            $districtId = fake()->randomElement($districtIds);

            $nkk = intval($districtId.$birthDate->format('dmy').fake()->numerify('####'));
            $nkk = (string) $districtId;
            $nkk .= ($isMale) ? $birthDate->format('d') : $birthDate->format('d') + 40;
            $nkk .= $birthDate->format('my');
            $nkk .= fake()->numerify('####');
            $nkk = intval($nkk);

            $villageId = Village::where('district_id', (int) $districtId)->first();

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
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }
        DB::table('families')->insert($data);
    }
}
