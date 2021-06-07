<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permiso')->insert([
            // Permisos de titulos
            [
                "idPermiso" => 301,
                "nombre" => "registrarTitulo",
            ],
            [
                "idPermiso" => 302,
                "nombre" => "consultarTitulo",
            ],
            [
                "idPermiso" => 303,
                "nombre" => "editarTitulo",
            ],
            [
                "idPermiso" => 304,
                "nombre" => "eliminarTitulo",
            ],

            // Permisos de juegos
            [
                "idPermiso" => 401,
                "nombre" => "registrarJuego",
            ],
            [
                "idPermiso" => 402,
                "nombre" => "consultarJuego",
            ],
            [
                "idPermiso" => 403,
                "nombre" => "editarJuego",
            ],
            [
                "idPermiso" => 404,
                "nombre" => "eliminarJuego",
            ],

            // Permisos de ofertas
            [
                "idPermiso" => 501,
                "nombre" => "registrarOferta",
            ],
            [
                "idPermiso" => 502,
                "nombre" => "consultarOferta",
            ],
            [
                "idPermiso" => 503,
                "nombre" => "editarOferta",
            ],
            [
                "idPermiso" => 504,
                "nombre" => "eliminarOferta",
            ],

            // Permisos de usuarios
            [
                "idPermiso" => 601,
                "nombre" => "registrarUsuario",
            ],
            [
                "idPermiso" => 602,
                "nombre" => "consultarUsuario",
            ],
            [
                "idPermiso" => 603,
                "nombre" => "editarUsuario",
            ],
            [
                "idPermiso" => 604,
                "nombre" => "eliminarUsuario",
            ],

        ]);
    }
}
