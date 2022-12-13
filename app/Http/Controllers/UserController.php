<?php

namespace App\Http\Controllers;

use App\Models\Tutor\Tutor;
use App\Models\Contacto\Contacto;
use App\Models\Llamada\Llamada;
use App\Models\Archivo\Archivo;
use App\Models\Contenido\Contenido;
use App\Models\Localizacion\Localizacion;





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
        $usuario = auth()->user();
        $hijos = Hijo::where('id_tutor', $usuario->id)->get();
        return view('pruebas.dashboard', compact('hijos'));
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
        $hijos = Hijo::where('id_tutor',$tutor->id)->get();
        return view('pruebas.tokens', ['tokens' => $tokens,'hijos'=>$hijos]);
    }

    public function generarToken(Request $request){
        $usuario = auth()->user();
        $tutor=Tutor::where('user_id',$usuario->id)->first();
        DB::insert('insert into tokens (codigo,fecha_creacion,estado,id_hijo,id_tutor) values (?,?,?,?,?)', [rand(10000,99999),Carbon::now()->setTimezone('America/La_Paz'),0,$request->id_hijo,$tutor->id]);
        return redirect()->route('tokens');
    }

    public function crear_hijo(Request $request){
        $usuario = auth()->user();
        $hijo=new Hijo;
        $hijo->name=$request->nombre;
        $hijo->id_tutor = $usuario->id;
        $hijo->apellido=$request->apellido;
        $hijo->celular=$request->celular;
        //$hijo->sexo=$request->sexo;
        $hijo->alias=$request->alias;
        $hijo->edad=$request->edad;
        $hijo->save();

        return redirect()->route('dispositivos');
    }

    public function hijoContactos($id){
        $data=Hijo::where('id',$id)->first();
        $contactos=Contacto::where('hijo_id',$id)->get();
        return view('pruebas.contactos', ['contactos' => $contactos, 'info' => $data]);
       
    }

    public function hijoLlamadas($id){
        $data=Hijo::where('id',$id)->first();
        $llamadas=Llamada::where('hijo_id',$id)->get();
        return view('pruebas.llamadas', ['llamadas' => $llamadas, 'info' => $data]);
    }

    public function hijoGaleria($id){
        $data=Hijo::where('id',$id)->first();
        $archivos=Archivo::where('hijo_id',$id)->get();
        return view('pruebas.archivos', ['archivos' => $archivos, 'info' => $data]);
    }

    public function hijoContenido($id){
        $data=Hijo::where('id',$id)->first();
        $archivos=Contenido::where('hijo_id',$id)->get();
        return view('pruebas.contenido', ['contenidos' => $archivos, 'info' => $data]);
    }

    public function hijoUbicacion($id){
        $data=Hijo::where('id',$id)->first();
        $ubicacion=Localizacion::where('hijo_id',$id)->first();
        
        //$archivos=Contenido::where('hijo_id',$id)->get();
        return view('pruebas.ubicacion', ['localizacion'=>$ubicacion,'info' => $data]);
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
