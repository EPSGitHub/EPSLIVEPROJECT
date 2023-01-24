<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobIdPrefixesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_id_prefixes', function (Blueprint $table) {
            $table->id();
            $table->string('department');
            $table->string('slug');
            $table->string('prefix_id');
            $table->integer('created_by');
            $table->integer('edited_by')->nullable();

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
        Schema::dropIfExists('job_id_prefixes');
    }
}
