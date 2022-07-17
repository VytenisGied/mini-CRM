<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * CRUD functionality (Create / Read / Update / Delete) for two menu items: Companies and Employees.
 * Employees DB table consists of these fields: first name (required), last name (required), Company (foreign key to Companies), email, phone.
 */
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('employee', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('lastname');
        $table->foreignId('company_id');
        $table->string('email')->unique()->nullable();
        $table->string('phone')->unique()->nullable();
        $table->timestamps();

        $table->foreign('company_id')->references('id')->on('company');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('employee');
    }
};
