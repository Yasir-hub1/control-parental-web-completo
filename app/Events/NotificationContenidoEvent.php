<?php

namespace App\Events;

use FontLib\TrueType\Collection;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Arr;

class NotificationContenidoEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $contenido;
    public $read;
    public $unread;
    public $time;
    public $timesur;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($contenido)
    {
       
        $this->contenido = $contenido;
        $this->time=$contenido->created_at->diffForHumans();
        $this->unread = auth()->user()->unreadNotifications->take(2)->pluck('data');
        $this->read = auth()->user()->readNotifications->take(3)->pluck('data');
        $times=auth()->user()->unreadNotifications->take(2)->pluck('created_at');
        $tiemposur= [];
        foreach ($times as $t) {
            array_push($tiemposur,$t->diffForHumans());
        }
        $this->timesur=$tiemposur;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return ['my-channel'];
    }

    public function broadcastAs()
    {
        return 'my-event';
    }
}
