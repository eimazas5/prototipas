<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToSalesTable extends Migration
{
    public function up()
    {
        Schema::table('sales', function (Blueprint $table) {
            $table->unsignedInteger('name_id')->nullable();

            $table->foreign('name_id', 'name_fk_735586')->references('id')->on('workers');
        });
    }
}
