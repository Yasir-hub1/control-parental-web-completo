<?php

namespace App\Listeners;

use App\Events\MyEvent;
use App\Models\Hijo\Hijo;
use App\Models\User;
use App\Notifications\NotificationContenido;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Auth;
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
        //para el tutor del hijo
       // $hijo = Hijo::find($event->contenido['hijo_id']);
       $user = User::find($event->user['id']);
       Notification::send($user, new NotificationContenido($event->contenido));

        if (count($user->expotokens) > 0) {
           $recipient = $user->expotokens[0]->expo_token;
           // You can quickly bootup an expo instance
           $expo = \ExponentPhpSDK\Expo::normalSetup();
           // Subscribe the recipient to the server
           $expo->subscribe('canal', $recipient);
           // Build the notification data
           $notification = ['body' => $event->contenido->contenido, 'title' => 'AVISO IMPORTANTE', 'ttl' => 60, 'Sound' => 'Default'];
           // Notify an interest with a notification
           $expo->notify(['canal'], $notification);
       }
    }
}
