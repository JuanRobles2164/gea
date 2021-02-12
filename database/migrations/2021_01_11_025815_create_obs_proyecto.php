<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObsProyecto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //para identificar al usuario/docente lider del proyecto
        Schema::create('obs_proyecto', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->timestamps();

            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_proyecto');
            $table->string('observacion');
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_proyecto')->references('id')->on('proyecto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('obs_proyecto');
    }
}
