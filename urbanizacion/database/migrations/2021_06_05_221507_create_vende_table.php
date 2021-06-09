<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfreceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // // $table->foreign('user_id')->on('users')->references('id')->onDelete('cascade');
        Schema::create('vende', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_user");
            $table->unsignedBigInteger("id_lote");
            $table->foreign('id_user')->on('users')->references('id')->onDelete('cascade');
            $table->foreign('id_lote')->on('terreno')->references('id')->onDelete('cascade');
            $table->float("comision");
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
        Schema::dropIfExists('vende');
    }
}
