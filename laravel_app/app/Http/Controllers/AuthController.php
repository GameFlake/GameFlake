<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

// Importar modelos
use App\Models\User;
use App\Models\Usuario;

class AuthController extends Controller
{
    /**
     * Verifica las credenciales del usuario y emite un token
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createToken(Request $request) {
        
        // Validar parametros POST de la peticion
        $request->validate([
            'email_or_username' => 'required',
            'password' => 'required',
            'device_name' => 'required',
        ]);
        
        $userByEmail = Usuario::where('correo', $request->email_or_username)->first();
        $userByUsername = Usuario::where('username', $request->email_or_username)->first();

        // Verificar que exista un usuario con este correo o este nombre de usuario
        if (!$userByEmail && !$userByUsername) {
            $responseJson = [
                'error' => 'Credenciales incorrectas.',
                'codigo' => 401 
            ];
            return response()->json($responseJson, 401);
        }
        
        $user = ($userByEmail) ? $userByEmail : $userByUsername;

        // Verificar que esta contraseña coincida
        if(!Hash::check($request->password, $user->password)) {
            $responseJson = [
                'error' => 'Credenciales incorrectas.',
                'codigo' => 401 
            ];
            return response()->json($responseJson, 401);
        }
        
        // Crear y devolver token
        $token = $user->createToken($request->device_name);
        $responseJson = ['token' => $token->plainTextToken];
        return response()->json($responseJson, 200);
    }

    /**
     * Elimina el token usado para autenticar la peticion actual
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function revokeToken(Request $request) {
        $request->user()->currentAccessToken()->delete();
        $responseJson = ['mensaje' => 'El token fue eliminado'];
        return response()->json($responseJson, 200);
    }

    /**
     * Regresa una respuesta de error de autorizacion
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function showAuthError(Request $request) {
        $responseJson = [
            'error' => 'No autorizado. Buen intento.',
            'codigo' => 401
        ];
        return response()->json($responseJson, 401);
    }   
}
