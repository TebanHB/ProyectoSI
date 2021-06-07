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
            $table->unsignedInteger("id_credito");
            $table->foreign('id_credito')->on('credito')->references('id')->onDelete('cascade');
            $table->unsignedInteger("id_mora");
            $table->foreign('id_mora')->on('mora')->references('id')->onDelete('cascade');
            $table->float("amortizacion");
            $table->integer("monto_cuota");
            $table->integer("cod_credito");
            $table->integer("nro_mora");
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
