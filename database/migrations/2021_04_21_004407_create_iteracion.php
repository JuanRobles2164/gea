<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIteracion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iteracion', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->integer("nro_iteracion");
            $table->boolean("est_activo")->default(true);
            $table->boolean("est_borrado")->default(false);
            $table->unsignedBigInteger("id_fase");
            $table->unsignedBigInteger("id_proyecto");

            $table->foreign("id_fase")->references("id")->on("fase");
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
        Schema::dropIfExists('iteracion');
    }
}
