<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\RegistrarToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExpoTokenController extends Controller
{
    public function registrarExpoToken(Request $request)//para tutor y hijo
    {
        // return $request->expo_token;
        $request->validate([
            'expo_token' => 'required|String|unique:registrar_tokens,expo_token',
            'user_id' => 'required|exists:users,id'
        ]);

        $registrar = RegistrarToken::create([
            'expo_token'=> $request->expo_token,
            'user_id'=> $request->user_id,
        ]);
        return response()->json([
            'data' => $registrar
        ], 404);
    }
    public function allNotification()
    {
        $user = Auth::user();
        if ($user->tipo == 't') {
            $notifications = $user->notifications;
            return response()->json([
                'data' => $notifications
            ]);
        }
    }
    public function unReadNotification()
    {
        
        $user = Auth::user();
        if ($user->tipo == 't') {
            $notifications = $user->unReadNotification;
            return response()->json([
                'data' => $notifications
            ]);
        }
    }
    public function readNotification()
    {
    }
}
