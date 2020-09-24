<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\ContactInfo;
use Carbon\Carbon;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // And now, let's create a few dummy addresses details in our database:
        DB::table('addresses')->insert([
            'address_line1' => '340 Third Ave Guld',
            'address_line2' => '',
            'city' => 'Springbok',
            'province' => 'Gauteng',
            'postal_code' => '2145',
            'personaldetails_id' => '1',
            'created_at' => Carbon::now()->format('d-m-Y H:i:s'),
            'updated_at' => Carbon::now()->format('d-m-Y H:i:s')
        ]);
		
		DB::table('addresses')->insert([
            'address_line1' => '2074 Panama Str Panama',
            'address_line2' => '',
            'city' => 'pietermuritzburg',
            'province' => 'KwaZulu-Natal',
            'postal_code' => '3201',
            'personaldetails_id' => '2',
            'created_at' => Carbon::now()->format('d-m-Y H:i:s'),
            'updated_at' => Carbon::now()->format('d-m-Y H:i:s')
        ]);
		
		DB::table('addresses')->insert([
            'address_line1' => '2045 senzokkuhle rd kwadabeka',
            'address_line2' => '',
            'city' => 'Inanda',
            'province' => '4310',
            'postal_code' => '',
            'personaldetails_id' => '3',
            'created_at' => Carbon::now()->format('d-m-Y H:i:s'),
            'updated_at' => Carbon::now()->format('d-m-Y H:i:s')
        ]);
    }
}
