<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title_en')->nullable();
            $table->string('title_bn')->nullable();
            $table->string('slug')->nullable();
            $table->integer('category')->nullable();
            $table->longText('shortdes_en')->nullable();
            $table->longText('shortdes_bn')->nullable();
            $table->longText('description_en')->nullable();
            $table->longText('description_bn')->nullable();
            $table->string('images_en') ->nullable();
            $table->string('images_bn') ->nullable();
            $table->string('seo_title') ->nullable();
            $table->string('seo_meta') ->nullable();
            $table->string('alt_en') ->nullable();
            $table->string('alt_bn') ->nullable();
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
        Schema::dropIfExists('posts');
    }
}
