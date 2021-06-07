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
        $adminPermissions = [
            301, 302, 303, 304,
            401, 402, 403, 404,
            501, 502, 503, 504,
            601, 602, 603, 604, 
        ];

        $userPermissions = [
            302,
            401, 402, 403, 404,
            501, 502, 503, 504,
            602,
        ];

        $admin_id = 201;    
        $user_id = 202;
        $id = 1;

        for($i = 0; $i < count($adminPermissions); $i++) {
            DB::table('permisoRol')->insert([
                [
                    "idPermisoRol" => $id,
                    "idPermiso" => $adminPermissions[$i],
                    "idRol" => $admin_id,
                ]
            ]);
            $id++;
        }

        for($i = 0; $i < count($userPermissions); $i++) {
            DB::table('permisoRol')->insert([
                [
                    "idPermisoRol" => $id,
                    "idPermiso" => $userPermissions[$i],
                    "idRol" => $user_id,
                ]
            ]);
            $id++;
        }

    }
}
