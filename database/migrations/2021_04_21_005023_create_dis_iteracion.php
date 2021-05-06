<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisIteracion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dis_iteracion', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger("id_iteracion");
            $table->unsignedBigInteger("id_disciplina");

            $table->foreign("id_iteracion")->references("id")->on("iteracion");
            $table->foreign("id_disciplina")->references("id")->on("disciplina");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dis_iteracion');
    }
}
