<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

// Importar modelos
use App\Models\User;

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

        // Verificar que exista el mismo nombre de usuario o correo
        $user_by_email = User::where('email', $email)->first();
        //$user_by_username = User::where('nombre_usuario', $email)->first();

        if($user_by_email) {
            $responseJson = [
                'error' => 'El nombre de usuario ya esta ocupado.',
                'codigo' => 409 
            ];
            return response()->json($responseJson, 409);
        }
        
        $new_user = new User;
        $new_user->name = $first_name;
        $new_user->email = $email;
        $new_user->password = Hash::make($password);
        $new_user->save();

        $responseJson = ['mensaje' => 'El usuario fue registrado exitosamente.'];
        return response()->json($responseJson, 200);
    }
}
