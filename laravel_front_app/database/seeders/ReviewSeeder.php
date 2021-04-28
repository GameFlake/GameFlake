<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('review')->insert([
            [
                "idReview" => 30,
                "idUsuario" => "2",
                "idTitulo" => "3",
                "fecha" => "2021-04-10",
                "calificacion" => "5",
                "textoReview" => "Me pareció un juego bastante agradable, tiene bellísimos gráficos y la historia es bastante completa.",
            ],
            [
                "idReview" => 33,
                "idUsuario" => "1",
                "idTitulo" => "2",
                "fecha" => "2021-04-19",
                "calificacion" => "3",
                "textoReview" => "Me gustó mucho, pero es difícil ver a los adversarios y aún se traba mucho el gameplay.",
            ]
        ]);
    }
}
