<?php

namespace App\Models;

use Illuminate\Support\Facades\Http;

class ApiAuth
{
    /**
     * Obtener token de la API con las credenciales
     * del usuario.
     *
     * @param string  $email_or_username
     * @param string  $password
     * @param string  $device
     * @return token|null
     */
    public static function getToken($email_or_username, $password, $device) {

        $response = Http::post(env('API_URL').'tokens/create', [
            'email_or_username' => $email_or_username,
            'password' => $password,
            'device_name' => $device
        ]);

        if($response->status() == 200) {
            return ($response->json()['token']);
        }
        
        return null;
    }

    /**
     *  Eliminar token por medio de la API.
     *
     * @param string  $token
     * @return bool si la peticion fue exitosa
     */
    public static function revokeToken($token) {

        $response = Http::withToken($token)
                        ->post(env('API_URL').'tokens/revoke');

        return ($response->status() == 200);
    }
}
