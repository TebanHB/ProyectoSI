<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManzanaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manzana', function (Blueprint $table) {
            $table->id("NRO_MANZ");
            $table->float("SUPERFICIE_MANZANA");
            $table->integer("CANTIDAD_DE_TERRENO");
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
        Schema::dropIfExists('manzana');
    }
}