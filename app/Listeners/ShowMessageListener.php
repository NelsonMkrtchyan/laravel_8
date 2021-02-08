<?php

namespace App\Listeners;

use App\Events\ShowMessageEvent;
use App\Models\Log;
use Illuminate\Contracts\Queue\ShouldQueue;

class ShowMessageListener implements ShouldQueue
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
     * @param  ShowMessageEvent  $event
     * @return void
     */
    public function handle(ShowMessageEvent $event)
    {

        sleep(15);

        $log['post_id'] = $event->id;
        $log['type'] = $event->type;

        Log::create($log);
    }

}
