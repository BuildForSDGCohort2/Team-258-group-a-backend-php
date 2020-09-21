<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\PersonalDetails;
use Carbon\Carbon;

class PersonalDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		
		
        // And now, let's create a few personal details in our database:
        DB::table('personalDetails')->insert([
            'initials' => 's.z.k.l',
            'surname' => 'mzulwini',
            'first_name' => 'sakhile',
            'second_name' => 'zane',
            'preferred_name' => 'sakhi',
            'citizenship' => 'south african by birth',
            'social_security' => '3205142369874',
            'date_of_birth' => '1932/05/14',
            'gender' => 'male',
            'marital_status' => 'single',
            'home_language' => 'zulu',
            'other_language' => 'english',
            'drivers_license' => 'code 10',
            'own_transport' => 'yes',
            'created_at' => Carbon::now()->format('d-m-Y H:i:s'),
            'updated_at' => Carbon::now()->format('d-m-Y H:i:s')
        ]);
		
		DB::table('personalDetails')->insert([
            'initials' => 'k',
            'surname' => 'khanyile',
            'first_name' => 'khanyisani',
            'second_name' => '',
            'preferred_name' => 'kay',
            'citizenship' => 'south african by birth',
            'social_security' => '9408012369874',
            'date_of_birth' => '1994/08/01',
            'gender' => 'male',
            'marital_status' => 'married',
            'home_language' => 'xhosa',
            'other_language' => 'english,zulu',
            'drivers_license' => 'code 10',
            'own_transport' => 'no',
            'created_at' => Carbon::now()->format('d-m-Y H:i:s'),
            'updated_at' => Carbon::now()->format('d-m-Y H:i:s')
        ]);
		
		DB::table('personalDetails')->insert([
            'initials' => 's.l',
            'surname' => 'ericson',
            'first_name' => 'stephen',
            'second_name' => 'leslie',
            'preferred_name' => 'stephen',
            'citizenship' => 'tempory resident visa',
            'passport_number' => '6505522369874',
            'date_of_birth' => '1965/05/22',
            'gender' => 'male',
            'marital_status' => 'single',
            'home_language' => 'french',
            'other_language' => 'english',
            'drivers_license' => '',
            'own_transport' => 'no',
            'created_at' => Carbon::now()->format('d-m-Y H:i:s'),
            'updated_at' => Carbon::now()->format('d-m-Y H:i:s')
        ]);
    }
}
