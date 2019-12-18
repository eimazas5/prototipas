<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToAddStocksTable extends Migration
{
    public function up()
    {
        Schema::table('add_stocks', function (Blueprint $table) {
            $table->unsignedInteger('name_id')->nullable();

            $table->foreign('name_id', 'name_fk_735559')->references('id')->on('new_products');
        });
    }
}
