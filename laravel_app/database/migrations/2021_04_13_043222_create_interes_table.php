<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInteresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interes', function (Blueprint $table) {
            $table->id('idInteres');
            $table->foreignId('idUsuario');
            $table->foreignId('idTitulo');

            $table->unique(['idUsuario','idTitulo']);

            $table->foreign('idUsuario')
                ->references('idUsuario')
                ->on('usuario')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('idTitulo')
                ->references('idTitulo')
                ->on('titulo')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interes');
    }
}
