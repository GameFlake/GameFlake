<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Importar modelos
use App\Models\ApiAuth;

class AuthController extends Controller
{
    /**
     * Envia las credenciales del usuario a la API, obtiene un
     * token de autenticacion y lo guarda en la sesion del usuario,
     * y redirige a la pagina de inicio.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return Illuminate\Http\RedirectResponse
     */
    public function login(Request $request) {

        // Validar parametros de la peticion
        $request->validate([
            'email_or_username' => 'required',
            'password' => 'required',
        ]);

        // Obtener token de la API
        $email_or_username = $request->email_or_username;
        $password = $request->password;
        $device = $request->header('User-Agent', 'default');
        
        $token = ApiAuth::getToken($email_or_username, $password, $device);

        if ($token == null) {
            return redirect()->route('login')
                ->with('error', 'Credenciales incorrectas. Vuelva a intentarlo porfavor.');
        }

        // Guardar token en la sesion
        $request->session()->regenerate();
        $request->session()->put('token', $token);

        return redirect()->route('home');
    }

    /**
     * Eliminar el token por medio de la API, destruye la sesion
     * del usuario y redirige a la pagina de login.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request) {
        $token = $request->session()->get('token');
        ApiAuth::revokeToken($token);

        $request->session()->invalidate();
        $request->session()->regenerateToken(); // Token de CSRF, no el token de la API

        return redirect()->route('login');
    }
}
