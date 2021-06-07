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
            $table->interger("cuota_inicial");
            $table->integer("plazo");
            $table->integer("interes_anual");
            $table->integer("cuota_mensual");
            $table->date("fecha_ultima_cuota");
            $table->String("estado");
            $table->float("saldo_financiado");
            $table->date("fecha_Prog");
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
