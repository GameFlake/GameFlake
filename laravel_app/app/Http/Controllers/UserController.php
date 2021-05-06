<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|alpha',
            'last_name' => 'required|alpha',
            'password' => 'required',
            'email' => 'required|email',
            'phone' => 'required|size:10',
            'user_name' => 'required|alpha_num',
        ]);
        if ($validator->fails()) {
            $responseJson = [
                'error' => 'Los parametros de la petición no son válidos.',
                'codigo' => 422 
            ];
            return response()->json($responseJson, 422);
        }
        
        $first_name = $request->first_name;
        $last_name = $request->last_name;
        $password = $request->password;
        $email = $request->email;
        $phone = $request->phone;
        $user_name = $request->user_name;

        // Verificar que no exista el mismo correo
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
        
        // Registrar nuevo usuario
        $newUser = new Usuario;
        $newUser->nombre = $first_name;
        $newUser->apellido = $last_name;
        $newUser->correo = $email;
        $newUser->password = Hash::make($password);
        $newUser->telefono = $phone;
        $newUser->username = $user_name;
        $newUser->save();

        $responseJson = ['mensaje' => 'El usuario fue registrado exitosamente.'];
        return response()->json($responseJson, 200);
    }
}
