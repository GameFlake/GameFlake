<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review', function (Blueprint $table) {
            $table->id('idReview');
            $table->foreignId('idUsuario');
            $table->foreignId('idTitulo');
            $table->date('fecha');
            $table->integer('calificacion');
            $table->text('textoReview');

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
        Schema::dropIfExists('review');
    }
}
