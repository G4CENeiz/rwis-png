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
        $districts = \App\Models\District::all();
        $districtIds = [];
        foreach ($districts as $district) {
            $districtIds[] = $district->district_id;
        }

        $data = [];
        for ($jumlahRt = 0; $jumlahRt < 10; $jumlahRt++) {
            for ($houseGroup = 0; $houseGroup < 5; $houseGroup++) {
                for ($jumlahRumah = 0; $jumlahRumah < 12; $jumlahRumah++) {
                    $isMale = true;
                    $birthDate  = fake()->dateTimeAD();
                    $districtId = fake()->randomElement($districtIds);
                    $nkk = intval($districtId . $birthDate->format('dmy') . fake()->numerify('####'));
                    $nkk = (string) $districtId;
                    $nkk .= ($isMale) ? $birthDate->format('d') : $birthDate->format('d') + 40;
                    $nkk .= $birthDate->format('my');
                    $nkk .= fake()->numerify('####');
                    $nkk = intval($nkk);

                    $villageId = Village::where('district_id', (int) $districtId)->first();

                    $data[] = [
                        'nkk'               => $nkk,
                        'house_id'          => ($houseGroup + 1) * ($jumlahRt + 1) * ($jumlahRumah + 1),
                        'address_street'    => fake()->streetAddress(),
                        'address_rt'        => $jumlahRt + 1,
                        'address_rw'        => 1,
                        'village_id'        => $villageId->village_id,
                        'zip_code'          => fake()->postcode(),
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ];
                }
            }
        }
        foreach (array_chunk($data, 1000) as $in) {
            DB::table('families')->insert($in);
        }
    }
}
