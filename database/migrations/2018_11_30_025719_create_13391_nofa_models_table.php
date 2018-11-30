<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateN13391NofaModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('n13391_nofa_models', function (Blueprint $table) {
            $table->increments('id_employee');
			$table->string('name');
			$table->string('username');
			$table->string('password');
			$table->string('companyEmail');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('n13391_nofa_models');
    }
}