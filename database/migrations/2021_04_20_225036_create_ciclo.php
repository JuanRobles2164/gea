<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCiclo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ciclo', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string("version");
            $table->date("fecha_inicio")->default(Carbon::now());
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
        Schema::dropIfExists('ciclo');
    }
}
