<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('job_id') ->unique();
            $table->string('job_type');
            $table->string('category');
            $table->string('designation');
            $table->integer('vacancy');
            $table->string('experiance')->nullable();
            $table->string('location')->nullable();
            $table->string('salary') -> default('negotiable');
            $table->longText('description');
            $table->date('apply_deadline');
            $table->integer('status')->default(1);
            $table->integer('posted_by');
            $table->string('edited_by')->nullable();
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
        Schema::dropIfExists('careers');
    }
}
