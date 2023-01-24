<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePressreleasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pressreleases', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('type');
            $table->integer('category');
            $table->longText('shortdes')->nullable();
            $table->longText('description')->nullable();
            $table->string('published_by') ->nullable();
            $table->string('published_date') ->nullable();
            $table->string('feature_img') ->nullable();
            $table->string('source_link') ->nullable();
            $table->string('slide_img') ->nullable();
            $table->string('seo_title') ->nullable();
            $table->string('seo_meta') ->nullable();
            $table->string('fimg_alt') ->nullable();
            $table->string('slideimg_alt') ->nullable();
            $table->boolean('status')->default(0);
            $table->boolean('editable')->default(1);
            $table->integer('posted_by');
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
        Schema::dropIfExists('pressreleases');
    }
}
