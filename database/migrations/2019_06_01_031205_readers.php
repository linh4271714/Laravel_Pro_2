<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Readers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Readers', function (Blueprint $table) {
            $table->increments('ID_reader');
            $table->string('Username');
            $table->integer('Identification');
            $table->string('Email');
            $table->string('Pass');
            $table->integer('PhoneNumber');
            $table->string('Address');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Readers');
    }
}
