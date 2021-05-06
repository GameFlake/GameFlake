<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRbacTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rol', function (Blueprint $table) {
            $table->id('idRol');
            $table->string('nombre', 20);
        });

        Schema::create('permiso', function (Blueprint $table) {
            $table->id('idPermiso');
            $table->string('nombre', 20);
        });

        Schema::create('usuarioRol', function (Blueprint $table) {
            $table->id('idUsuarioRol');
            $table->foreignId('idUsuario');
            $table->foreignId('idRol');

            $table->unique(['idUsuario','idRol']);

            $table->foreign('idUsuario')->references('idUsuario')->on('usuario')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('idRol')->references('idRol')->on('rol')
                ->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('permisoRol', function (Blueprint $table) {
            $table->id('idPermisoRol');
            $table->foreignId('idPermiso');
            $table->foreignId('idRol');

            $table->unique(['idPermiso','idRol']);

            $table->foreign('idPermiso')->references('idPermiso')->on('permiso')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('idRol')->references('idRol')->on('rol')
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
        Schema::dropIfExists('rol');
        Schema::dropIfExists('permiso');
        Schema::dropIfExists('usuarioRol');
        Schema::dropIfExists('permisoRol');
    }
}
