<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobseekersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     *
    public function up()
    {  
     
    	Schema::enableForeignKeyConstraints();
        Schema::create('jobseekers', function (Blueprint $table) {
            $table->JobSeekerID(); //do you want custom primary keys and timestamps manages created at and updated at, so is there a need for me to do lastChangeLog & DateAdded
            $table->string('JobSeekerOrganisationType'); //dropdown select menu
            $table->id('BoiSubtable'); //couldn't find
            $table->date('DateAdded');
            $table->string('Status(Active/Inactive/pending');
            $table->date('lastChangeLog');
            $table->string('RegistrationEmailSent(y/n)');
            $table->id('SiteUserActived'); //??
            $table->foreignId('access_id')->constrained();//('UserAccessLevelSubtable');
			$table->foreignId('personalDetails_id')->constrained();  //('PersonalDetailSubtable');
            $table->foreignId('address_id')->constrained();  //('AddressSubtableFields');
            $table->foreignId('contactDetails_id')->constrained(); //('ContactTetailsSubtable');
            $table->foreignId('qualification_id')->constrained(); //('QualificationSubtable');
            $table->foreignId('skills_id')->constrained(); //('SkillsSubtable');
            $table->foreignId('citizenships_id')->constrained();//rsa status tbl
			$table->foreignId('languages_id')->constrained(); //languages tbl
			$table->foreignId('socialMedias_id')->constrained(); //('SocialMediaSubtable');
            $table->foreignId('documents_id')->constrained(); //('DocumentsSubtable');
            $table->foreignId('ficaStatus_id')->constrained(); //('FicaPassed');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     *
    public function down()
    {
		//Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('jobseekers');
    }*/
}
