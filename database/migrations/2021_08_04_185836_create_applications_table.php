<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->integer('requestor_id')->references('id')->on('users');
            $table->string('applicant_first_name');
            $table->string('applicant_middle_name');
            $table->string('applicant_last_name');
            $table->date('birthday');
            $table->integer('grade_level');
            $table->string('guardian_name');
            $table->string('guardian_type');
            $table->string('country');
            $table->string('region')->nullable();
            $table->string('zone')->nullable();
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->string('postal_code')->nullable();
            $table->boolean('application_type');
            $table->integer('file_id')->references('id')->on('files'); 
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
        Schema::dropIfExists('applications');
    }
}
