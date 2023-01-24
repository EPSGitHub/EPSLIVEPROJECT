<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePressCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('press_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name_en')->unique();
            $table->string('slug');
            $table->string('name_bn');
            $table->boolean('status')->default(true);
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
        Schema::dropIfExists('press_categories');
    }
}
