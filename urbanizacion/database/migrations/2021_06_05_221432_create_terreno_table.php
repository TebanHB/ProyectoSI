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
            $table->id();
            $table->unsignedBigInteger("nro_contrato1");
            $table->foreign('nro_contrato')->on('contrato')->references('id')->onDelete('cascade');
            $table->unsignedBigInteger("nro_manzana");
            $table->foreign('nro_manzana')->on('manzana')->references('id')->onDelete('cascade');
            $table->unsignedBigInteger("id_users");
            $table->foreign('id_users')->on('users')->references('id')->onDelete('cascade');
            $table->float("superficie_terreno");
            $table->float("precio");
            $table->string("estado_terreno");
            $table->string("ubicacion");

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
