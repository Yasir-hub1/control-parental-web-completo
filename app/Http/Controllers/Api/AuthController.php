<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {

        $validateData = $request->validate([
            'ci' => 'required|string|max:10',
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'fecha_nacimiento' => 'required|date',
            'sexo' => 'required|string|max:1',
            'celular' => 'required|numeric',
            'tipo' => 'required|string|max:1',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|confirmed|string|min:8'
        ]);
        $user = User::create([
            'ci'=>$validateData['ci'],
            'name' => $validateData['name'],
            'lastname'=>$validateData['lastname'],
            'fecha_nacimiento'=>$validateData['fecha_nacimiento'],
            'sexo'=>$validateData['sexo'],
            'celular'=>$validateData['celular'],
            'tipo'=>$validateData['tipo'],
            'email' => $validateData['email'],
            'password' => bcrypt($validateData['password'])
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer'
        ]);
    }
    public function login(Request $request)
    {

        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
                'message' => 'Email o contraseña incorrecto'
            ], 401);
        }
        $user = User::where('email', $request['email'])->firstOrFail();

        $token = $user->createToken('auth_token')->plainTextToken;
        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer'
        ]);
    }

    public function profile(Request $request)
    {
        return $request->user();
    }
    public function logout(Request $request)
    {

        $request->user()->currentAccessToken()->delete();
        return response()->json([
            "msg" => "Cierre de Sesión",
            "data" => $request->user()
        ]);
    }
}
