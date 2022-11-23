<?php

namespace App\Listeners;

use App\Models\Hijo\Hijo;
use App\Models\User;
use App\Notifications\NotificationContenido;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class NotificationContenidoListener
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
        //para el tutor del hijo
        $hijo=Hijo::find($event->contenido->hijo_id);
        User::all()
        ->except($event->contenido->user_id)
        ->each(function(User $user) use($event){
           Notification::send($user,new NotificationContenido($event->contenido));
        });
    }
}
