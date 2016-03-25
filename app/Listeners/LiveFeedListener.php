<?php

namespace App\Listeners;

use App\Events\LiveFeedEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class LiveFeedListener
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
     * @param  LiveFeedEvent  $event
     * @return void
     */
    public function handle(LiveFeedEvent $event)
    {
        //
    }
}
