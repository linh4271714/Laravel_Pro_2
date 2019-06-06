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
            $table->string('ID_book',20);
            $table->string('Name');
            $table->integer('ID_author');
            $table->integer('ID_category');
            $table->integer('ID_publisher');
            $table->integer('Price');
            $table->integer('Quanlity');
            $table->string('Image');
            $table->string('Demo',500);
            $table->string('Location');
            $table->string('Damage');
            $table->integer('BeenRead');
            $table->integer('ID_manager');
            $table->primary('ID_book');
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
