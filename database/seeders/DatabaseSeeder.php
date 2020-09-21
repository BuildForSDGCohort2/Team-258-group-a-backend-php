<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
		$this->call([
        PersonalDetailsSeeder::class,
        //PostSeeder::class,
        //CommentSeeder::class,
    ]);
    }
}