<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('department');
            $table->string('designation');
            $table->string('user_role');
            $table->string('address')->nullable();
            $table->string('image')->default('avatar.jpg');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->longText('access');
            $table->longText('sub_access');
            $table->integer('created_by');
            $table->integer('edited_by')->nullable();

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
