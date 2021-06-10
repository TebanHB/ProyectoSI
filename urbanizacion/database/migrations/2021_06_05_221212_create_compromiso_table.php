<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompromisoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compromiso', function (Blueprint $table) {
            $table->id();
            $table->float('monto_pagado');
            $table->float('monto_a_pagar');
            $table->date('fecha_pago_garantia');
            $table->date('fecha_a_pagar');
            $table->unsignedBigInteger('pago_id');
            $table->foreign('pago_id')->on('pago')->references('id')->onDelete('cascade');
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
        Schema::dropIfExists('compromiso');
    }
}
