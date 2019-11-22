<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Padalinys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('padalinys', function (Blueprint $table) {
            $table->increments('padalinio_ID');
            $table->string('pavadinimas', 20);
            $table->string('adresas', 30);
            $table->string('telefonas', 10);
            $table->string('epastas', 30);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('padalinys');
    }
}
