<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		
		
        Schema::create('socialmedia', function (Blueprint $table) {
            $table->id();
            $table->string('websiteurl')->nullable();
            $table->string('facebookurl')->nullable();
            $table->string('twitterurl')->nullable();
            $table->string('instagramurl')->nullable();
            $table->string('linkedinurl')->nullable();
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
        Schema::dropIfExists('social_media');
    }
}
