<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		
        //dummy data for skills
		DB::table('skills')->insert(array(
            'skill_array' => array('painting', 'driving', 'gardening'),
            'personaldetails_id' => '1',
            'created_at' => Carbon::now()->format('d-m-Y H:i:s'),
            'updated_at' => Carbon::now()->format('d-m-Y H:i:s')
        ));
		
	
		DB::table('skills')->insert([
            'skill_array' => ['driving', 'gardening'],
            'personaldetails_id' => '2',
            'created_at' => Carbon::now()->format('d-m-Y H:i:s'),
            'updated_at' => Carbon::now()->format('d-m-Y H:i:s')
        ]);
		
	    
		DB::table('skills')->insert([
            'skill_array' => ['painting', 'driving', 'arts and crafts'],
            'personaldetails_id' => '3',
            'created_at' => Carbon::now()->format('d-m-Y H:i:s'),
            'updated_at' => Carbon::now()->format('d-m-Y H:i:s')
        ]);
    }
}
