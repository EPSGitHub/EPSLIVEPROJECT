<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFullTextSearchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('full_text_searches', function (Blueprint $table) {
            $table->id();
            $table->string('title_en')->nullable();
            $table->string('title_bn')->nullable();
            $table->string('des_en')->nullable();
            $table->string('des_bn')->nullable();
            $table->string('link_en')->nullable();
            $table->string('link_bn')->nullable();
            $table->integer('created_by');
            $table->integer('updated_by')->nullable();
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
        Schema::dropIfExists('full_text_searches');
    }
}
