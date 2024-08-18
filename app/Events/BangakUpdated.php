<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class BangakUpdated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $model;
    public $modelType;

    /**
     * Create a new event instance.
     *
     * @param object $model - Model instance (misalnya, Bangak, ERDKKBangak, dll.)
     * @param string $modelType - Nama tipe model, untuk identifikasi lebih lanjut
     */
    public function __construct($model, string $modelType)
    {
        $this->model = $model;
        $this->modelType = $modelType;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('channel-name'),
        ];
    }
}
