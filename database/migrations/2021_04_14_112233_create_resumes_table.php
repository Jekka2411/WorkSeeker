<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resumes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('status')->default(0);
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->double('salary')->nullable();
            $table->string('currency')->nullable();
            $table->string('about_me')->nullable();
            $table->string('english')->nullable();
            $table->boolean('ready_to_move')->default(false);
            $table->boolean('ready_to_workmove')->default(false);
            $table->boolean('full_work')->default(false);
            $table->boolean('part_work')->default(false);
            $table->boolean('project_work')->default(false);
            $table->boolean('intern_work')->default(false);
            $table->boolean('full_day')->default(false);
            $table->boolean('flow_day')->default(false);
            $table->boolean('remote_work')->default(false);
            $table->dateTime('active_date')->nullable();
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
        Schema::dropIfExists('resumes');
    }
}
