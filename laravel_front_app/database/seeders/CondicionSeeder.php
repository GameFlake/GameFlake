<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CondicionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('condicion')->insert([
            [
                "idCondicion" => 1,
                "nombre" => "nuevo",
                "descripcion" => "El juego viene en su plástico de compra, jamás ha sido abierto.",
            ],
            [
                "idCondicion" => 2,
                "nombre" => "seminuevo",
                "descripcion" => "El juego se usó algunas veces, no tiene rayones, y está en excelentes condiciones.",
            ],
            [
                "idCondicion" => 3,
                "nombre" => "usado",
                "descripcion" => "El juego se usó varias veces y tiene ligeros rayones visibles en su superficie, pero corre con normalidad.",
            ],
            [
                "idCondicion" => 4,
                "nombre" => "muy usado",
                "descripcion" => "El juego se usó muchas veces y tiene  rayones visibles en su superficie, a veces la consola no lo detecta.",
            ]
        ]);
    }
}
