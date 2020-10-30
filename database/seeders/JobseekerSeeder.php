<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class JobseekerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // And now, let's create a few dummy jobseekers details in our database:
        DB::table('jobseekers')->insert([
            'status' => 'active',
            'personaldetails_id' => '1',
            'languages_id' => '1',
            'addresses_id' => '1',
            'contactinfos_id' => '1',
            'qualifications_id' => '1',
            'skills_id' => '1',
            'socialmedia_id' => '1',
            'documents_id' => '1',
            'created_at' => Carbon::now()->format('d-m-Y H:i:s'),
            'updated_at' => Carbon::now()->format('d-m-Y H:i:s')
        ]);
		
		DB::table('jobseekers')->insert([
            'status' => 'active',
            'personaldetails_id' => '2',
            'languages_id' => '2',
            'addresses_id' => '2',
            'contactinfos_id' =>'2',
            'qualifications_id'=>'2',
            'skills_id' => '2',
            'socialmedia_id' => '2',
            'documents_id' =>'2',
            'created_at' => Carbon::now()->format('d-m-Y H:i:s'),
            'updated_at' => Carbon::now()->format('d-m-Y H:i:s')
        ]);
		
		DB::table('jobseekers')->insert([
            'status' => 'active',
            'personaldetails_id' => '3',
            'languages_id' => '3',
            'addresses_id' => '3',
            'contactinfos_id' =>'3',
            'qualifications_id' => '3',
            'skills_id' => '3',
            'socialmedia_id' => '3',
            'documents_id' => '3',
            'created_at' => Carbon::now()->format('d-m-Y H:i:s'),
            'updated_at' => Carbon::now()->format('d-m-Y H:i:s')
        ]);
    }
}
