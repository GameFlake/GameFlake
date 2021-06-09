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
                "fechaInicio" => "2021-04-04",
                "fechaTerminacion" => NULL,
                "idJuegoRecipiente" => "1",
                "idJuegoOfertante" => "3",
                "estado" => "Pendiente",
            ],
            [
                "fechaInicio" => "2021-04-04",
                "fechaTerminacion" => NULL,
                "idJuegoRecipiente" => "1",
                "idJuegoOfertante" => "2",
                "estado" => "Pendiente",
            ],
            [
                "fechaInicio" => "2021-04-04",
                "fechaTerminacion" => NULL,
                "idJuegoRecipiente" => "1",
                "idJuegoOfertante" => "5",
                "estado" => "Pendiente",
            ],
            [
                "fechaInicio" => "2021-04-04",
                "fechaTerminacion" => NULL,
                "idJuegoRecipiente" => "5",
                "idJuegoOfertante" => "4",
                "estado" => "Pendiente",
            ],
        ]);
    }
}
