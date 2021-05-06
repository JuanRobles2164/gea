<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHito extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hito', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string("nombre");
            $table->string("descripcion")->nullable();
            $table->boolean("tipo");
            $table->string("respuesta");
            $table->boolean("checkpoint");
            $table->unsignedBigInteger("id_fase");

            $table->foreign("id_fase")->references("id")->on("fase");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hito');
    }
}
