<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('appimg');
            $table->longText('apptxt_en');
            $table->longText('apptxt_bn');
            $table->string('ioslink')->nullable();;
            $table->string('apklink')->nullable();
            $table->longText('social')->nullable();
            $table->longText('Maps')->nullable();
            $table->string('address_en');
            $table->string('address_bn');
            $table->string('contact_en');
            $table->string('contact_bn');
            $table->string('blogsidebarimg_en')->nullable();
            $table->string('blogsidebarimg_bn')->nullable();
            $table->string('email');
            $table->string('updated_by');
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
        Schema::dropIfExists('settings');
    }
}
