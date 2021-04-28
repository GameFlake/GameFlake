<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermisoRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permisoRol')->insert([
            [
                "idPermisoRol" => 1,
                "idPermiso" => "302",
                "idRol" => "202",
            ],
            [
                "idPermisoRol" => 2,
                "idPermiso" => "301",
                "idRol" => "201",
            ],
            [
                "idPermisoRol" => 3,
                "idPermiso" => "302",
                "idRol" => "201",
            ],
            [
                "idPermisoRol" => 4,
                "idPermiso" => "303",
                "idRol" => "201",
            ],
            [
                "idPermisoRol" => 5,
                "idPermiso" => "304",
                "idRol" => "201",
            ],
            [
                "idPermisoRol" => 6,
                "idPermiso" => "305",
                "idRol" => "201",
            ],
        ]);
    }
}
