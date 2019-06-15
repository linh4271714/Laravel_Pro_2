<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetailedInvoice extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DetailedInvoice', function (Blueprint $table) {
            $table->integer('ID_bill')->unsigned();
            $table->string('ID_book',100);
            $table->integer('Amount');
            $table->integer('Price');
            $table->primary(['ID_bill','ID_book']);

            $table->foreign('ID_bill')->references('ID_bill')->on('bills');
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
        Schema::dropIfExists('DetailedInvoice');
    }
}
