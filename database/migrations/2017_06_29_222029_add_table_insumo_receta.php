<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableInsumoReceta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insumo_receta', function (Blueprint $table) {
            $table->increments('id');
             $table->string('cantidad');
             $table->integer('id_insumo')->unsigned();
             $table->foreign('id_insumo')->references('id')->on('insumos');
             $table->integer('id_receta')->unsigned();
             $table->foreign('id_receta')->references('id')->on('recetas');
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
        Schema::drop('insumo_receta');
    }
}
