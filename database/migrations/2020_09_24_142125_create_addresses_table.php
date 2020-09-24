<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
/*
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Database\Seeders\AddressSeeder;*/

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('address_line1');
            $table->string('address_line2')->nullable();
            $table->string('city');
            $table->string('province');
            $table->string('postal_code');
            $table->string('personaldetails_id')->constrained();
            $table->timestamps();
			
			/*this calls the seeder after creating the table
			//this prevents inserting redundant data everytime you seed/ insert dummy data
			/ you only have to run php artisan migrate --force.
			/
			$this->call('database\seeds\AddressSeeder');
			Artisan::call('db:seed', [
                '--class' => AddressSeeder::class,
             ]);*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
