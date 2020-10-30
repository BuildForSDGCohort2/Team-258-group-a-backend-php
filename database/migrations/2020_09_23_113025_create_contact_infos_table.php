<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		
        Schema::create('contactinfos', function (Blueprint $table) {
            $table->id();
            $table->string('position');
            $table->string('contact_person');
            $table->string('phone_number_1');
            $table->string('phone_number_2')->nullable();
            $table->string('primary_email');
            $table->string('secondary_email')->nullable();
			$table->foreignId('personaldetails_id')
            ->constrained()
            ->onDelete('cascade');
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
        Schema::dropIfExists('contactinfos');
		
    }
}
