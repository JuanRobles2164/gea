<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrupoUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupo_usuario', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger("id_usuario");
            $table->unsignedBigInteger("id_grupo");

            $table->foreign("id_usuario")->references("id")->on("users");
            $table->foreign("id_grupo")->references("id")->on("grupo_trabajo");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grupo_usuario');
    }
}
