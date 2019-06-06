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
            $table->bigIncrements('ID_bill');
            $table->integer('ID_reader');
            $table->integer('ID_lender');
            $table->date('BorrowDate');
            $table->integer('ID_receiver');
            $table->date('ReturnDate');
            $table->integer('Form');
            $table->integer('Total');
            $table->integer('Status');
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
