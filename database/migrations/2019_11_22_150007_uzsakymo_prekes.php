<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UzsakymoPrekes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uzsakymo_prekes', function (Blueprint $table) {
            $table->integer('uzsakymo_ID')->unsigned();
            $table->integer('preke')->unsigned();
            $table->integer('kiekis');
            $table->decimal('kaina', 7, 2);

            $table->foreign('uzsakymo_ID')
                ->references('uzsakymo_ID')
                ->on('uzsakymas');

            $table->foreign('preke')
                ->references('produkto_ID')
                ->on('produktas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('uzsakymo_prekes');
    }
}
