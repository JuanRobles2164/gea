<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCicloFase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ciclo_fase', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger("id_ciclo");
            $table->unsignedBigInteger("id_fase");

            $table->foreign("id_ciclo")->references("id")->on("ciclo");
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
        Schema::dropIfExists('ciclo_fase');
    }
}
