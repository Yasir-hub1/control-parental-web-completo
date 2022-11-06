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

    function checkout(Request $request) {
        $stripe = new \Stripe\StripeClient(
        'sk_test_51LmGK0FzDqUMV7KR60uYN3GMiz8Lj9E8NTNjcn0S0JJgc3ckYgq3HTf3jEIwbGnw32CRaoCqaVZbuZKLnrdQE9NV009wbCpeEa'
        );
        $check = $stripe->checkout->sessions->create([
            'success_url' => 'http://localhost:8000/success?id='.$request->plan,
            'cancel_url' => 'http://localhost:8000/plan',
            'line_items' => [
            [
                'price' => $request->precio,
                'quantity' => 1,
            ],
            ],
            'mode' => 'subscription',
            'customer' => 'cus_MiCFK5KDnMIn3k'
        ]);
        //Plan y precio --> "$request->plan" ; customer en la tabla user --> "stripe_id"
        //Enviar el metodo update a una funcion de verificacion en success
        return redirect($check->url);
      }

      function plan(){
        $stripe = new \Stripe\StripeClient(
            'sk_test_51LmGK0FzDqUMV7KR60uYN3GMiz8Lj9E8NTNjcn0S0JJgc3ckYgq3HTf3jEIwbGnw32CRaoCqaVZbuZKLnrdQE9NV009wbCpeEa'
          );
        $plan = $stripe->customers->retrieve(
            'cus_Mi6uMjfg4eP6FR',
            []
          );
        if($plan->metadata->plan!=null){
            return view('pruebas/plan',['plan' => $plan->metadata->plan]);
        }
        $plans = $stripe->products->all(['limit' => 3]);
        return view('pruebas/plans',['plans' => $plans]);
      }

      function success(Request $request){
        dd($request->id);
        $stripe = new \Stripe\StripeClient(
            'sk_test_51LmGK0FzDqUMV7KR60uYN3GMiz8Lj9E8NTNjcn0S0JJgc3ckYgq3HTf3jEIwbGnw32CRaoCqaVZbuZKLnrdQE9NV009wbCpeEa'
          );
        $stripe->customers->update(
            auth()->user()->stripe_id,
            ['metadata' => ['plan' => 'Plan Premium']]
        );
        return redirect()->route('plan');
      }
}