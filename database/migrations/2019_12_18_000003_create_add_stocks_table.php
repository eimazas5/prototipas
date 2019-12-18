<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddStocksTable extends Migration
{
    public function up()
    {
        Schema::create('add_stocks', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('amounttoadd')->nullable();

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
