<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuario')->insert([
            [
                "idUsuario" => 1,
                "nombre" => "Adolfo",
                "apellido" => "Acosta",
                "correo" => "aacost@gmail.com",
                "password" => Hash::make("cntwfrwby"),
                "telefono" => "4423765643",
                "username" => "acostagamiing",
            ],
            [
                "idUsuario" => 2,
                "nombre" => "Guillermo",
                "apellido" => "Espino",
                "correo" => "espinoc@gmail.com",
                "password" => Hash::make("myPa$$198"),
                "telefono" => "4423789076",
                "username" => "glinkisgaming",
            ],
            [
                "idUsuario" => 3,
                "nombre" => "Valeria",
                "apellido" => "Guerra",
                "correo" => "valedo@gmail.com",
                "password" => Hash::make("herPa$$765"),
                "telefono" => "4423459806",
                "username" => "valisselling",
            ],
            [
                "idUsuario" => 4,
                "nombre" => "Julian",
                "apellido" => "Pedrin",
                "correo" => "jules@peter.com",
                "password" => Hash::make("pass"),
                "telefono" => "4423459806",
                "username" => "julian",
            ]
        ]);
    }
}
