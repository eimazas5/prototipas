<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewProductsTable extends Migration
{
    public function up()
    {
        Schema::create('new_products', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name')->nullable();

            $table->integer('stock')->nullable();

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
