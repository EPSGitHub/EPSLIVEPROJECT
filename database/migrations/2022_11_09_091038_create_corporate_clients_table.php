<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorporateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corporate_clients', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('employee_number');
            $table->string('contact_person');
            $table->string('email');
            $table->string('phone');
            $table->string('website') ->nullable();
            $table->longText('company_details');
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
        Schema::dropIfExists('corporate_clients');
    }
}
