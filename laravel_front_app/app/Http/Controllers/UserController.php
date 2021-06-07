<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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
        
        // Validar hcaptcha
        $captcha_reponse = Http::asForm()->post('https://hcaptcha.com/siteverify', [
            'secret' => "0xBe5d564C39b35176Fac92f44A1b22fa949d969B4",
            'response' => $request->input('h-captcha-response')
        ]);
        if(!$captcha_reponse->json()['success']) {
            return redirect()->route('create_user')
                ->with('captcha', 'El captcha es obligatorio.');
        }

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
                ->with('error', $message)->withInput();
        }
        
        // Iniciar sesion del usuario
        $device = $request->header('User-Agent', 'default');        
        $response = ApiAuth::getToken($email, $password, $device);

        $token = $response["token"];
        $permissions = $response["permisos"];

        // Guardar token y permisos en la sesion
        $request->session()->regenerate();
        $request->session()->put('token', $token);
        $request->session()->put('permissions', $permissions);

        return redirect()->route('home');
    }
}
