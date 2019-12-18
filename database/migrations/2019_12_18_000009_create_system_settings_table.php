<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSystemSettingsTable extends Migration
{
    public function up()
    {
        Schema::create('system_settings', function (Blueprint $table) {
            $table->increments('id');

            $table->string('company_name')->nullable();

            $table->string('vat_code')->nullable();

            $table->string('company_code')->nullable();

            $table->string('logo')->nullable();

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
