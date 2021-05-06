<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisciplina extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disciplina', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string("nombre");
            $table->string("descripcion")->nullable();
            $table->boolean("est_activo")->default(true);
            $table->boolean("est_borrado")->default(false);
            $table->date("fecha_inicio");
            $table->date("fecha_limite");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('disciplina');
    }
}
