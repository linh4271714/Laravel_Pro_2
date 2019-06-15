<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Managers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Managers', function (Blueprint $table) {
            $table->increments('ID_manager');
            $table->string('Username');
            $table->string('Pass');
            $table->string('Email');
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
        Schema::dropIfExists('Managers');
    }
}
