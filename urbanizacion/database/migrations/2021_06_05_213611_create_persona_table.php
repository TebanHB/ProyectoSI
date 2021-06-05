<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona', function (Blueprint $table) {
            $table->id("Ci");
            $table->string("Nombre");
            $table->string("Id_Vendedor");
            $table->string("Id_Cliente");
            $table->string("Id_Administrador");
            $table->string("Tipo_Vendedor");
            $table->string("Tipo_Visita");
            $table->string("Tipo_Cliente");
            $table->string("Tipo_Administrador");
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
        Schema::dropIfExists('persona');
    }
}
