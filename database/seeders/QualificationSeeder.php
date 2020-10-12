<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class QualificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //dummy qualifications
		DB::table('qualifications')->insert([
            'institution_attended' => '',
            'qualification_name' => '',
            'NQFlevel' => '',
            'personaldetails_id' => '1',
            'created_at' => Carbon::now()->format('d-m-Y H:i:s'),
            'updated_at' => Carbon::now()->format('d-m-Y H:i:s')
        ]);
		
		DB::table('qualifications')->insert([
            'institution_attended' => 'someinstitution',
            'qualification_name' => 'big qualification',
            'NQFlevel' => '7',
            'personaldetails_id' => '2',
            'created_at' => Carbon::now()->format('d-m-Y H:i:s'),
            'updated_at' => Carbon::now()->format('d-m-Y H:i:s')
        ]);
		
		DB::table('qualifications')->insert([
            'institution_attended' => 'french institute of capentry',
            'qualification_name' => 'capentry',
            'NQFlevel' => '6',
            'personaldetails_id' => '3',
            'created_at' => Carbon::now()->format('d-m-Y H:i:s'),
            'updated_at' => Carbon::now()->format('d-m-Y H:i:s')
        ]);
    }
}
