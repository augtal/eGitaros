<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Produktas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produktas', function (Blueprint $table) {
            $table->increments('produkto_ID');
            $table->string('pavadinimas', 20)->unique();
            $table->integer('tipas')->unsigned();
            $table->integer('spalva')->unsigned();
            $table->decimal('kaina', 7, 2);
            $table->text('aprasas');
            $table->timestamps();

            $table->foreign('tipas')
                ->references('tipo_ID')
                ->on('tipas');

            $table->foreign('spalva')
                ->references('spalvos_ID')
                ->on('spalvos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produktas');
    }
}
