<?php

namespace App\Events;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class TicketCreated implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $customer;
    public $message;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Customer $customer, $message)
    {
        $this->customer = $customer;
        $this->message = $message;
    }


    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('tickets.' . $this->customer->id);
    }
    public function broadcastWith()
    {
        return [
            'title' =>  $this->message
        ];
    }

    public function broadcastAs()
    {
        return 'ticket.created';
    }
}