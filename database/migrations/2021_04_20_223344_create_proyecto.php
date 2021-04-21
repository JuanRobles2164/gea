<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyecto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyecto', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->string("nombre");
            $table->string("descripcion")->nullable();
            $table->date("fecha_inicio");
            $table->date("fecha_limite");
            $table->boolean("est_activo")->default(true);
            $table->boolean("est_borrado")->default(false);
            $table->unsignedBigInteger("id_usuario");

            $table->foreign("id_usuario")->references("id")->on("users");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyecto');
    }
}
