<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\ContactInfo;
use Carbon\Carbon;

class ContactInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // And now, let's create a few dummy contact details in our database:
        DB::table('contactinfos')->insert([
            'position' => 'job seeker',
            'contact_person' => 'sakhile',
            'phone_number_1' => '0832256894',
            'phone_number_2' => '0762653217',
            'primary_email' => 'skhilemzu@gmail.com',
            'secondary_email' => '',
            'personaldetails_id' => '1',
            'created_at' => Carbon::now()->format('d-m-Y H:i:s'),
            'updated_at' => Carbon::now()->format('d-m-Y H:i:s')
        ]);
		
		DB::table('Contactinfos')->insert([
            'position' => 'job seeker',
            'contact_person' => 'kay',
            'phone_number_1' => '0822256254',
            'phone_number_2' => '0813573217',
            'primary_email' => 'Khanyile.k@gmail.com',
            'secondary_email' => 'kayk@gmail.com',
            'personaldetails_id' => '2',
            'created_at' => Carbon::now()->format('d-m-Y H:i:s'),
            'updated_at' => Carbon::now()->format('d-m-Y H:i:s')
        ]);
		
		DB::table('Contactinfos')->insert([
            'position' => 'job seeker',
            'contact_person' => 'stephen',
            'phone_number_1' => '0632252294',
            'phone_number_2' => '',
            'primary_email' => 'stephenlerricson@yahoo.com',
            'secondary_email' => '',
            'personaldetails_id' => '3',
            'created_at' => Carbon::now()->format('d-m-Y H:i:s'),
            'updated_at' => Carbon::now()->format('d-m-Y H:i:s')
        ]);
    }
}
