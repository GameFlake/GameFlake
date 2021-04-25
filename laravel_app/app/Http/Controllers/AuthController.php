<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

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
            'email' => 'required|email',
            'password' => 'required',
            'device_name' => 'required',
        ]);
        
        // Verificar credenciales de usuario
        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            $responseJson = [
                'error' => 'Credenciales incorrectas.',
                'codigo' => 400
            ];
            return response()->json($responseJson, 400);
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
