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
            $table->id("Codigo");
            $table->interger("Cuota_Inicial");
            $table->integer("Plazo");
            $table->integer("Interés_Anual");
            $table->integer("Cuota_Mensual");
            $table->date("Fecha_Ultima_Cuota");
            $table->String("Estado");
            $table->float("Saldo_Financiado");
            $table->date("Fecha_Prog");
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
