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
            [
                "idPermiso" => 305,
                "nombre" => "registrarUsuario",
            ]
        ]);
    }
}
