<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserExperience extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_experience', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('resumes_id')->unsigned();
            $table->foreign('resumes_id')->references('id')->on('resumes');
            $table->date('date_begin');
            $table->date('date_finished')->nullable();
            $table->string('company')->nullable();
            $table->string('region')->nullable();
            $table->string('position')->nullable();
            $table->string('description')->nullable();
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
        Schema::dropIfExists('user_experience');
    }
}
