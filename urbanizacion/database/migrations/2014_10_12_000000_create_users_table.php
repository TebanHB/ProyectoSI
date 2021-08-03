<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('carnet');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->boolean("tipo_vendedor");
            $table->boolean("tipo_visita");
            $table->boolean("tipo_cliente");
            $table->boolean("tipo_administrador");
            $table->text('url_foto')->nullable();
            $table->boolean('estado');// 1 activo 0 desactivado
        });
    }


    public function down()
    {
        Schema::dropIfExists('users');
    }
}
