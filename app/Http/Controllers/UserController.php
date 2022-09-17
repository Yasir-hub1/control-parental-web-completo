<?php

namespace App\Http\Controllers;

use App\Models\Tutor\Tutor;
use App\Models\Hijo\Hijo;
use App\Models\Token;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;



use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function menu(){
        return view('pruebas.dashboard');
    }

    public function dispositivos(){
        $usuario = auth()->user();
        $tutor=Tutor::where('user_id',$usuario->id)->first();
        $tokens=Token::where('id_tutor',$tutor->id)->where('id_hijo','!=',null)->get();;
        return view('pruebas.dispositivos')->with('tokens',$tokens);
    }

    public function perfil(){
        return view('pruebas.perfil');
    }

    protected function tokens()
    {
        $usuario = auth()->user();
        $tutor=Tutor::where('user_id',$usuario->id)->first();
        $tokens = DB::table('tokens')->where('id_tutor',$tutor->id)->get();
        return view('pruebas.tokens', ['tokens' => $tokens]);
    }

    public function generarToken(){
        $usuario = auth()->user();
        $tutor=Tutor::where('user_id',$usuario->id)->first();
        DB::insert('insert into tokens (codigo,fecha_creacion,estado,id_tutor) values (?,?,?,?)', [rand(10000,99999),Carbon::now()->setTimezone('America/La_Paz'),1,$tutor->id]);
        return redirect()->route('tokens');
    }

    public function crear_hijo(Request $request){
        $hijo=new Hijo;
        $hijo->name=$request->nombre;
        $hijo->apellido=$request->apellido;
        $hijo->celular=$request->celular;
        $hijo->sexo=$request->sexo;
        $hijo->alias=$request->alias;
        $hijo->edad=$request->edad;
        $hijo->save();

        return redirect()->route('dispositivos');
    }
}
