<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

// Importar modelos
use App\Models\Usuario;

class UserController extends Controller
{
    /**
     * Registra un nuevo usuario
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
            'birthday' => 'required|date|before:-13 years',
            'user_name' => 'required|alpha_num'
        ]);
        
        $first_name = $request->first_name;
        $last_name = $request->last_name;
        $password = $request->password;
        $email = $request->email;
        $birthday = $request->birthday;
        $user_name = $request->user_name;

        // Verificar que no exista el correo
        $userByEmail = Usuario::where('correo', $request->email)->first();
        if($userByEmail) {
            $responseJson = [
                'error' => 'Ese correo ya esta ocupado.',
                'codigo' => 409 
            ];
            return response()->json($responseJson, 409);
        }

        // Verificar que no exista el mismo nombre de usuario
        $userByUsername = Usuario::where('username', $request->user_name)->first();
        if($userByUsername) {
            $responseJson = [
                'error' => 'Ese nombre de usuario ya esta ocupado.',
                'codigo' => 409 
            ];
            return response()->json($responseJson, 409);
        }
        
        // Registrar nuevos usuario
        $newUser = new Usuario;
        $newUser->nombre = $first_name;
        $newUser->apellido = $last_name;
        $newUser->correo = $email;
        $newUser->password = Hash::make($password);
        $newUser->telefono = "1234567901";
        $newUser->username = $user_name;
        $newUser->save();

        $responseJson = ['mensaje' => 'El usuario fue registrado exitosamente.'];
        return response()->json($responseJson, 200);
    }
}
