<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuota', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_credito");
            $table->foreign('id_credito')->on('pago')->references('id')->onDelete('cascade');
            $table->unsignedBigInteger("id_mora")->nullable();
            $table->foreign('id_mora')->on('mora')->references('id')->onDelete('cascade');
            $table->float("amortizacion");
            $table->integer("monto_cuota");
            $table->date("fecha_pagada");
            $table->date("fecha_programada");
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
        Schema::dropIfExists('cuota');
    }
}
