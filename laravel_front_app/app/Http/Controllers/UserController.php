<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Importar modelos
use App\Models\ApiAuth;
use App\Models\ApiUser;

class UserController extends Controller
{
    /**
     * Muestra la vista para crear un nuevo usuario
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('new_user');
    }

    /**
     * Registra un nuevo usuario por medio de la API
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validar parametros de la peticion
        $request->validate([
            'first_name' => 'required|alpha',
            'last_name' => 'required|alpha',
            'password' => 'required',
            'email' => 'required|email',
            'phone' => 'required|size:10',
            'user_name' => 'required|alpha_num',
            'terms' => 'required',
        ]);
        
        $first_name = $request->first_name;
        $last_name = $request->last_name;
        $password = $request->password;
        $email = $request->email;
        $phone = $request->phone;
        $user_name = $request->user_name;

        // Registrar al usuario con la API
        $message = ApiUser::create($first_name, $last_name, $password, $email, $phone, $user_name);
        if ($message != "") {
            return redirect()->route('create_user')
                ->with('error', $message);
        }
        
        // Iniciar sesion del usuario
        $device = $request->header('User-Agent', 'default');        
        $token = ApiAuth::getToken($email, $password, $device);

        // Guardar token en la sesion
        $request->session()->regenerate();
        $request->session()->put('token', $token);

        return redirect()->route('home');
    }
}
