<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkersTable extends Migration
{
    public function up()
    {
        Schema::create('workers', function (Blueprint $table) {
            $table->increments('id');

            $table->string('first_name');

            $table->string('last_name');

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
