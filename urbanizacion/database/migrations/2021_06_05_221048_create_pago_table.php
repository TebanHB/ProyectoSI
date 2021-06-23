<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pago', function (Blueprint $table) {
            $table->id();
            $table->string("tipo");
            $table->integer('cuota_inicial')->nullable();
            $table->integer('plazo')->nullable();
            $table->integer('interes_anual')->nullable();
            $table->integer('cuota_mensual')->nullable();
            $table->string('fecha_prog')->nullable();
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_ultima_cuota')->nullable();
            $table->string('estado')->nullable();
            $table->float('saldo_financiado')->nullable();
            $table->float('monto_pagado')->nullable();
            $table->float('monto_a_pagar')->nullable();
            $table->date('fecha_pago_garantia')->nullable();
            $table->date('fecha_a_pagar')->nullable();
            $table->float("monto")->nullable();
            $table->float("descuento")->nullable();
            $table->date("fecha_de_pago")->nullable();
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
        Schema::dropIfExists('pago');
    }
}
