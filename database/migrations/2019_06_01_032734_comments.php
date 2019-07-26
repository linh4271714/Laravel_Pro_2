<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Comments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Comments', function (Blueprint $table) {
            $table->increments('ID_cmt');
            $table->integer('ID_book')->unsigned();
            $table->integer('ID_reader')->unsigned();
            $table->string('Content',500);

            $table->foreign('ID_book')->references('ID_book')->on('books');
            $table->foreign('ID_reader')->references('ID_reader')->on('readers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Comments');
    }
}
