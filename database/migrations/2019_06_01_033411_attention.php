<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Attention extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Attention', function (Blueprint $table) {
            $table->integer('ID_reader')->unsigned();
            $table->integer('ID_category')->unsigned();
            $table->primary(['ID_reader', 'ID_category']);

            $table->foreign('ID_reader')->references('ID_reader')->on('readers');
            $table->foreign('ID_category')->references('ID_category')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Attention');
    }
}
