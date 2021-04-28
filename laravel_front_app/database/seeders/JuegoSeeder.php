<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JuegoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('juego')->insert([
            [
                "idJuego" => 1,
                "comentarios" => "Sólo lo jugué una vez, está casi como nuevo",
                "idUsuario" => "1", // Adolfo
                "idTitulo" => "2", //Mario Kart
                "idCondicion" => "2", //seminuevo
                "idConsola" => "1", //Switch
            ],
            [
                "idJuego" => 2,
                "comentarios" => "Viene aún en su cubierta original de plástico, nunca abierto",
                "idUsuario" => "2", // Memo
                "idTitulo" => "3", //BOTW
                "idCondicion" => "1", //nuevo
                "idConsola" => "3", //Wii U
            ],
            [
                "idJuego" => 3,
                "comentarios" => "Funciona a la perfección, aunque tiene algunos rayoncitos casi invisibles.",
                "idUsuario" => "3", // Vale
                "idTitulo" => "1", //Crash
                "idCondicion" => "3", //usado
                "idConsola" => "2", //Play 5
            ]
        ]);
    }
}
