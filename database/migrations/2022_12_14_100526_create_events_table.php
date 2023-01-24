<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('event_date_en')->nullable();
            $table->string('event_date_bn')->nullable();
            $table->string('event_type_en')->nullable();
            $table->string('title_en')->nullable();
            $table->string('slug')->nullable();
            $table->string('title_bn')->nullable();
            $table->string('short_details_en')->nullable();
            $table->string('short_details_bn')->nullable();
            $table->longText('description_en')->nullable();
            $table->longText('description_bn')->nullable();
            $table->string('location_en')->nullable();
            $table->string('location_bn')->nullable();
            $table->string('gallery_link')->nullable();
            $table->string('seo_title')->nullable();
            $table->string('seo_meta')->nullable();
            $table->string('featured_images_en')->nullable();
            $table->string('featured_images_bn')->nullable();
            $table->string('alt_txt_en')->nullable();
            $table->string('alt_txt_bn')->nullable();
            $table->integer('posted_by');
            $table->integer('updated_by')->nullable();
            $table->integer('status')->default(2);
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
        Schema::dropIfExists('events');
    }
}
