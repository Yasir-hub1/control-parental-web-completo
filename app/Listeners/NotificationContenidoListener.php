<?php

namespace App\Listeners;

use Exception;
use App\Models\User;
use App\Events\MyEvent;
use App\Models\Hijo\Hijo;
use App\Models\RegistrarToken;
use Illuminate\Support\Facades\Auth;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Notifications\NotificationContenido;
use Illuminate\Support\Facades\Notification;

class NotificationContenidoListener implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        /* array para contenidos */
        $nameData=array(
            'Nudity'=>'Desnudez',
            'Graphic Male Nudity'=>'Desnudez Masculina Gráfica',
            'Graphic Female Nudity'=>'Desnudez femenina gráfica',
            'Sexual Activity'=>'Actividad Sexual',
            'Illustrated Explicit Nudity'=>'Desnudez explícita ilustrada',
            'Adult Toys'=>'Juguetes para adultos',
            'Female Swimwear Or Underwear'=>'Ropa interior femenino',
            'Male Swimwear Or Underwear'=>'Ropa interior masculino',
            'Partial Nudity'=>'Desnudez parcial',
            'Barechested Male'=>'Hombre con el torso desnudo',
            'Revealing Clothes'=>'Atuendo revelador',
            'Sexual Situations'=>'Situaciones Sexuales',
            'Graphic Violence Or Gore'=>'Violencia Gráfica O Gore',
            'Physical Violence'=>'Violencia física',
            'Weapon Violence'=>'Violencia con Armas',
            'Weapons'=>'Armas',
            'Self Injury'=>'Auto lastimarse',
            'Emaciated Bodies'=>'Cuerpos demacrados',
            'Corpses'=>'Cuerpos',
            'Hanging'=>'Colgante',
            'Air Crash'=>'Accidente aéreo',
            'Explosions And Blasts'=>'Explosiones y explosiones',
            'Middle Finger'=>'Dedo del medio',
            'Drug Products'=>'Productos farmacéuticos',
            'Drug Use'=>'El consumo de drogas',
            'Pills'=>'Pastillas',
            'Drug Paraphernalia'=>'Parafernalia de drogas',
            'Tobacco Products'=>'Productos de tabaco',
            'Smoking'=>'Fumar',
            'Drinking'=>'Bebiendo',
            'Alcoholic Beverages'=>'Bebidas alcohólicas',
            'Gambling'=>'Juego',
            'Nazi Party'=>'Fiesta nazi',
            'White Supremacy'=>'La supremacía blanca',
            'Extremist'=>'Extremista',
            "Blood & Gore"=>'Sangre y gore',
            "Partially Exposed Buttocks"=>"Nalgas parcialmente expuestas",
            'Products'=>'Producto',
            );



        //para el tutor del hijo
        // $hijo = Hijo::find($event->contenido['hijo_id']);
        $user = User::find($event->user['id']);
        Notification::send($user, new NotificationContenido($event->contenido));
        $data=["contenido"=>$event->contenido->contenido,"tipoContenido"=>$event->contenido->tipo_contenido,"hijo"=>$event->hijo->name,"path"=>$event->contenido->url];
        $userToken=RegistrarToken::select("expo_token")->where("user_id",$user->id)->first();
        //   var_dump($userToken->expo_token);
        if ($userToken) {
            $recipient = $userToken->expo_token;
            // dd($recipient);
            // You can quickly bootup an expo instance
            $expo = \ExponentPhpSDK\Expo::normalSetup();
            // Subscribe the recipient to the server
            $expo->subscribe('canal', $recipient);
            // Build the notification data
            $notification = ['body' =>"Tu hij@ está mirando ".$nameData[$event->contenido->contenido], 'title' => 'Protecting You', 'ttl' => 60, 'Sound' => 'Default','priority'=>'high','data'=>$data];
            // Notify an interest with a notification
            $expo->notify(['canal'], $notification);
        }else{
            return;
        }
    }
}
