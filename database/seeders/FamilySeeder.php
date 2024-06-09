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
        $rtLim = 3;
        $hgLim = 3;
        $rmhLim = 8;
        for ($rt = 0; $rt < $rtLim; $rt++) {
            for ($hg = 0; $hg < $hgLim; $hg++) {
                for ($rmh = 0; $rmh < $rmhLim; $rmh++) {
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
                        'house_id'          => ($hg*$rmhLim)+($rt*$rmhLim*$hgLim)+($rmh*1)+1,
                        'address_street'    => fake()->streetAddress(),
                        'address_rt'        => $rt + 1,
                        'address_rw'        => 1,
                        'village_id'        => $villageId->village_id,
                        'zip_code'          => fake('id_ID')->postcode(),
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
