<?php

namespace App\Models;

use Illuminate\Support\Facades\Http;

class ApiUser
{
    /**
     * Registrar nuevo usuario por medio de la API.
     *
     * @param string  $first_name
     * @param string  $last_name
     * @param string  $password
     * @param string  $email
     * @param string  $birthday
     * @param string  $user_name
     * @return String an error message if there were any
     */
    public static function create($first_name, $last_name, $password, $email, $birthday, $user_name) {

        $response = Http::post(env('API_URL').'users/store', [
            'first_name' => $first_name,
            'last_name' => $last_name,
            'password' => $password,
            'email' => $email,
            'birthday' => $birthday,
            'user_name' => $user_name
        ]);
        
        if($response->status() == 200) {
            return "";
        }
        
        return ($response->json()['error']);
    }
}
