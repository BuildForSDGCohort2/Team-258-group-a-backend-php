<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\SocialMedia;
use Carbon\Carbon;

class SocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // And now, let's create a few dummy addresses details in our database:
        DB::table('socialmedia')->insert([
            'websiteurl' => '',
            'facebookurl' => 'https://www.facebook.com/sakhile-mzulwini',
            'twitterurl' => 'https://www.twitter.com/sakhile-mzulwini',
            'instagramurl' => 'https://www.instagram.com/sakhile-mzulwini',
            'linkedinurl' => '',
            'personaldetails_id' => '1',
            'created_at' => Carbon::now()->format('d-m-Y H:i:s'),
            'updated_at' => Carbon::now()->format('d-m-Y H:i:s')
        ]);
		
		DB::table('socialmedia')->insert([
            'websiteurl' => '',
            'facebookurl' => '',
            'twitterurl' => '',
            'instagramurl' => '',
            'linkedinurl' => '',
            'personaldetails_id' => '2',
            'created_at' => Carbon::now()->format('d-m-Y H:i:s'),
            'updated_at' => Carbon::now()->format('d-m-Y H:i:s')
        ]);
		
		DB::table('socialmedia')->insert([
            'websiteurl' => '',
            'facebookurl' => '',
            'twitterurl' => '',
            'instagramurl' => 'https://www.instagram.com/erricsonl',
            'linkedinurl' => '',
            'personaldetails_id' => '3',
            'created_at' => Carbon::now()->format('d-m-Y H:i:s'),
            'updated_at' => Carbon::now()->format('d-m-Y H:i:s')
        ]);
    }
}
