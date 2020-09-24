<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		
        Schema::create('personaldetails', function (Blueprint $table) {
            $table->id();
            $table->string('initials');
            $table->string('surname');
            $table->string('first_name');
            $table->string('second_name')->nullable();
            $table->string('preferred_name');
            $table->string('citizenship');
            $table->string('social_security')->nullable(); //restrict in the controller
            $table->string('passport_number')->nullable(); //restrict in the controller
            $table->date('date_of_birth'); //format it
            $table->string('gender');
            $table->string('marital_status');
            $table->string('home_language');
            $table->string('other_language');
            $table->string('drivers_license')->nullable();
            $table->string('own_transport');
           // $table->foreignId('contactinfos_id')->nullable()->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personaldetails');
        //Schema::dropIfExists('contactinfos');
    }
}
