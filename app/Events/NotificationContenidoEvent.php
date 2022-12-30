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
    public $user;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($user, $contenido)
    {

        $this->contenido = $contenido;
        $this->user=$user;
    }
    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastAs()
    {
        return 'event-' . $this->user->id;
    }
    public function broadcastOn()
    {
        return new Channel('channel' . $this->user->id);
    }
}
