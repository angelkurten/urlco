<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class LiveFeedEvent extends Event
{
    use SerializesModels;

    CONST EVENT = 'live.feed';
    CONST CHANNEL = 'live.feed';

    public function __construct($data)
    {
        $redis = \LRedis::connection();

        $redis->publish(self::CHANNEL, $data);
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}
