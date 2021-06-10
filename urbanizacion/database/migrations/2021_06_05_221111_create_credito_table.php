<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credito', function (Blueprint $table) {
            $table->id();
            $table->integer('cuota_inicial');
            $table->integer('plazo');
            $table->integer('interes_anual');
            $table->integer('cuota_mensual');
            $table->string('fecha_prog');
            $table->date('fecha_inicio');
            $table->date('fecha_ultima_cuota');
            $table->string('estado');
            $table->float('saldo_financiado');
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
        Schema::dropIfExists('credito');
    }
}
