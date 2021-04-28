<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarioRol')->insert([
            [
                "idUsuarioRol" => 1,
                "idUsuario" => "1",
                "idRol" => "202",
            ],
            [
                "idUsuarioRol" => 2,
                "idUsuario" => "2",
                "idRol" => "202",
            ],
            [
                "idUsuarioRol" => 3,
                "idUsuario" => "3",
                "idRol" => "202",
            ]
        ]);
    }
}
