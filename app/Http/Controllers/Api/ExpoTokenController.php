<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\RegistrarToken;
use App\Models\Token;
use App\Models\Tutor\Tutor;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ExpoTokenController extends Controller
{
    public function registrarExpoToken(Request $request)//para tutor y hijo
    {
        // return 'entra************************//////////////////////*/*/';
        
        // return $request;
        // $request->validate([
        //     'expo_token' => 'required|String|unique:registrar_tokens,expo_token',
        //     'user_id' => 'required|exists:users,id'
        // ]);
        $registrar = RegistrarToken::create([
                'expo_token'=> $request->expo_token,
                'user_id'=> $request->user_id,
            ]);
        return response()->json([
            'data' => $registrar
        ]);
    }

    public function eliminarExpoToken(){
        
        $expoToken=RegistrarToken::find(auth()->user()->expotokens->first()->id);
        $expoToken->delete();
        return response()->noContent();
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
    
    public function send_token(Request $request)//envia el token de registro
    {
        $user_id = User::all()->find(Auth::user()->id)->id;
        $tutor_id= Tutor::where('user_id', $user_id)->first()->id;
        // $fechaActual = date('d-m-Y H:i:s');
        // return $request;
        $fechaActual=Carbon::now()->setTimezone('America/La_Paz');
        $token= new token();
        $token->codigo= $request->params['token_register'];
        $token->fecha_creacion= $fechaActual;
        $token->estado= 0;
        $token->id_tutor= $tutor_id;
        $token->id_hijo= $request->params['id_hijo'];
        // return $token;
        $token->save();

        // DB::insert('insert into tokens (codigo,fecha_creacion,estado,id_hijo,id_tutor) values (?,?,?,?,?)', [$request->token_register,Carbon::now()->setTimezone('America/La_Paz'),0,1,$tutor_id]);
        return response()->json([
            'data' => 'realizado correctamente',
            // 'token'=> $token
        ]);
    }
}