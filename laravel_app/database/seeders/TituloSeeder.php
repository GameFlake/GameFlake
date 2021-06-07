<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TituloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('titulo')->insert([
            [
                "idTitulo" => 1,
                "nombre" => "Crash Bandicoot: Insane Trilogy",
                "fechaLanzamiento" => "2019-04-12",
                "edicion" => "Estándar",
                "imgRuta" => "img/crash.jpeg",
            ],
            [
                "idTitulo" => 2,
                "nombre" => "Mario Kart 8",
                "fechaLanzamiento" => "2017-03-17",
                "edicion" => "Estándar",
                "imgRuta" => "img/mariokart.jpeg",
            ],
            [
                "idTitulo" => 3,
                "nombre" => "The Legend of Zelda: Breath of the Wild",
                "fechaLanzamiento" => "2017-03-18",
                "edicion" => "Estándar",
                "imgRuta" => "img/zelda.jpeg",
            ],
            [
                "idTitulo" => 4,
                "nombre" => "Little Nightmares II",
                "fechaLanzamiento" => "2020-11-20",
                "edicion" => "Deluxe",
                "imgRuta" => "img/nightmares.jpeg",
            ],
            [
                "idTitulo" => 5,
                "nombre" => "Overcooked 2",
                "fechaLanzamiento" => "2018-08-07",
                "edicion" => "Deluxe",
                "imgRuta" => "img/overcooked2.jpeg",
            ]
        ]);
    }
}
