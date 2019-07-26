<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FavoriteList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('FavoriteList', function (Blueprint $table) {
            $table->integer('ID_reader')->unsigned();
            $table->integer('ID_book')->unsigned();
            $table->primary(['ID_reader','ID_book']);

            $table->foreign('ID_reader')->references('ID_reader')->on('readers');
            $table->foreign('ID_book')->references('ID_book')->on('books');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('FavoriteList');
    }
}
