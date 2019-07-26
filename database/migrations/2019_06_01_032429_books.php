<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Books extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Books', function (Blueprint $table) {
            $table->increments('ID_book');
            $table->string('Name');
            $table->integer('ID_author')->unsigned();
            $table->integer('ID_category')->unsigned();
            $table->integer('ID_publisher')->unsigned();
            $table->integer('Price');
            $table->integer('Quanlity');
            $table->string('Image');
            $table->string('Demo',5000);
            $table->string('Location');
            $table->string('Damage');
            $table->integer('Status');
            $table->date('ImportDate');
            $table->integer('ID_manager')->unsigned();

            $table->foreign('ID_author')->references('ID_author')->on('authors');
            $table->foreign('ID_category')->references('ID_category')->on('categories');
            $table->foreign('ID_publisher')->references('ID_publisher')->on('publishers');
            $table->foreign('ID_manager')->references('ID_manager')->on('managers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Books');
    }
}
