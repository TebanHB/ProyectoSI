<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contrato', function (Blueprint $table) {
            $table->id();
            $table->date("fecha_adjudicacion");
            $table->float("monto");
            $table->unsignedBigInteger("id_user")->nullable();
            $table->foreign('id_user')->on('users')->references('id')->onDelete('cascade');
            $table->unsignedBigInteger("codigo_pago")->nullable();
            $table->foreign('codigo_pago')->on('pago')->references('id')->onDelete('cascade');
            $table->boolean('estado'); //1 completado y 0 pendiente
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
        Schema::dropIfExists('contrato');
    }
}
