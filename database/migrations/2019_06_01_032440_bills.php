<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bills extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Bills', function (Blueprint $table) {
            $table->increments('ID_bill');
            $table->string('ReaderName');
            $table->integer('ID_reader');
            $table->integer('ID_lender')->unsigned();
            $table->date('BorrowDate');
            $table->integer('ID_receiver')->unsigned();
            $table->date('ReturnDate');
            $table->integer('Form');
            $table->integer('Total');
            $table->integer('Status');

            $table->foreign('ID_lender')->references('ID_manager')->on('managers');
            $table->foreign('ID_receiver')->references('ID_manager')->on('managers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Bills');
    }
}
