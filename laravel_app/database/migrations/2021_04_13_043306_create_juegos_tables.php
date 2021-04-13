<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJuegosTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('condicion', function (Blueprint $table) {
            $table->id('idCondicion');
            $table->string('nombre', 10);
            $table->string('descripcion', 255);
        });

        Schema::create('consola', function (Blueprint $table) {
            $table->id('idConsola');
            $table->string('nombre', 20);
        });

        Schema::create('juego', function (Blueprint $table) {
            $table->id('idJuego');
            $table->string('comentarios', 255);
            $table->foreignId('idUsuario');
            $table->foreignId('idTitulo');
            $table->foreignId('idCondicion');
            $table->foreignId('idConsola');

            $table->foreign('idUsuario')->references('idUsuario')->on('usuario')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('idTitulo')->references('idTitulo')->on('titulo')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('idCondicion')->references('idCondicion')->on('condicion')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('idConsola')->references('idConsola')->on('consola')
                ->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('oferta', function (Blueprint $table) {
            $table->id('idOferta');
            $table->date('fechaInicio');
            $table->date('fechaTerminacion');
            $table->foreignId('idJuegoRecipiente');
            $table->foreignId('idJuegoOfertante');
            
            $table->unique(['idJuegoRecipiente','idJuegoOfertante']);

            $table->foreign('idJuegoRecipiente')->references('idJuego')->on('juego')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('idJuegoOfertante')->references('idJuego')->on('juego')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('condicion');
        Schema::dropIfExists('consola');
        Schema::dropIfExists('juego');
        Schema::dropIfExists('oferta');
    }
}
