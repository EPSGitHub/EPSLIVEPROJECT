<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobapplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobapplications', function (Blueprint $table) {
            $table->id();
            $table->string('job_title');
            $table->string('job_id');
            $table->string('job_position');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('expected_Salary');
            $table->integer('status');
            $table->string('attachment');
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
        Schema::dropIfExists('jobapplications');
    }
}
