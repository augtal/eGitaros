<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProduktoLikutis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produkto_likutis', function (Blueprint $table) {
            $table->increments('likucio_ID');
            $table->integer('sandelys')->unsigned();
            $table->integer('produktas')->unsigned();
            $table->integer('likutis');

            $table->foreign('sandelys')
                ->references('sandelio_ID')
                ->on('sandelys');

            $table->foreign('produktas')
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
        Schema::dropIfExists('produkto_likutis');
    }
}
