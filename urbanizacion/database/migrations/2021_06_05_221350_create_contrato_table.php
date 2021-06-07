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
            $table->unsignedInteger("id_user");
            $table->foreign('id_user')->on('users')->references('id')->onDelete('cascade');    
            $table->unsignedInteger("codigo_pago");
            $table->foreign('codigo_pago')->on('pago')->references('id')->onDelete('cascade');       
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
