<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersTable extends Migration
{
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name')->nullable();

            $table->string('vat')->nullable();

            $table->string('company_code')->nullable();

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
