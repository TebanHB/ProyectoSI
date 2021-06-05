<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTerrenoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terreno', function (Blueprint $table) {
            $table->id("NRO_LOTE");
            $table->float("SUPERFICIE_TERRENO");
            $table->float("PRECIO");
            $table->string("ESTADO_TERRENO");
            $table->string("UBICACION");
            $table->id("NRO_CONTRATO1");
            $table->id("NRO_MANZANA");
            $table->id("CI_CLIENTE1");
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
        Schema::dropIfExists('terreno');
    }
}
