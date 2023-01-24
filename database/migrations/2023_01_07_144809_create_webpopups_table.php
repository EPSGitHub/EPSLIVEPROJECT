<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebpopupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('webpopups', function (Blueprint $table) {
            $table->id();
            $table->string('popuptext_en');
            $table->string('popuptext_bn');
            $table->string('button_text_en');
            $table->string('button_text_bn');
            $table->string('link')->nullable();
            $table->string('image')->nullable();
            $table->boolean('status')->default(0);
            $table->string('created_by');
            $table->string('updated_by')->nullable();
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
        Schema::dropIfExists('webpopups');
    }
}
