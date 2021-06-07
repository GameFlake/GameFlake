<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OfertaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('oferta')->insert([
            [
                "idOferta" => 437,
                "fechaInicio" => "2021-04-12",
                "fechaTerminacion" => NULL,
                "idJuegoRecipiente" => "1",
                "idJuegoOfertante" => "2",
                "estado" => "Pendiente",

            ],
            [
                "idOferta" => 754,
                "fechaInicio" => "2021-04-14",
                "fechaTerminacion" => "2021-04-20",
                "idJuegoRecipiente" => "3",
                "idJuegoOfertante" => "4",
                "estado" => "Aprobado",

            ]
        ]);
    }
}
