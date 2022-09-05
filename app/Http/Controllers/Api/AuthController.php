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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8'
        ]);
        $user=User::create([
            'name' => $validateData['name'],
            'email' => $validateData['email'],
            'password' => bcrypt($validateData['password'])
        ]);

        $token=$user->createToken('auth_token')->plainTextToken;

        return response()->json([
           'access_token'=>$token,
           'token_type'=>'Bearer'
        ]);
    }
    public function login(Request $request){
        
        if(!Auth::attempt($request->only('email','password'))){
            return response()->json([
               'message'=>'Email o contraseña incorrecto'
            ],401);
        }
        $user=User::where('email',$request['email'])->firstOrFail();

        $token=$user->createToken('auth_token')->plainTextToken;
        return response()->json([
            'access_token'=>$token,
            'token_type'=>'Bearer'
         ]);
    }

    public function profile(Request $request){
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
