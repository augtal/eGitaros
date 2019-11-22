<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Uzsakymas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uzsakymas', function (Blueprint $table) {
            $table->increments('uzsakymo_ID');
            $table->decimal('kaina', 7, 2);
            $table->integer('padalinys')->unsigned();

            $table->foreign('padalinys')
                ->references('padalinio_ID')
                ->on('padalinys');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('uzsakymas');
    }
}
