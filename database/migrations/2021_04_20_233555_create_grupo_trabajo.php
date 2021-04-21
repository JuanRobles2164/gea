<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrupoTrabajo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupo_trabajo', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string("nombre");
            $table->string("descripcion")->nullable();
            $table->boolean("est_activo")->default(true);
            $table->boolean("est_borrado")->default(false);
            $table->unsignedBigInteger("id_proyecto");

            $table->foreign("id_proyecto")->references("id")->on("proyecto");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grupo_trabajo');
    }
}
