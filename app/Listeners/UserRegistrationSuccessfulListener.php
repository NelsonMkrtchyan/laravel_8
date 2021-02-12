<?php

namespace App\Listeners;

use App\Jobs\SendRegistrationEmail;
use App\Mail\EmailTemplate;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

/**
 * Class UserRegistrationSuccessfulListener
 *
 * @package App\Listeners
 */
class UserRegistrationSuccessfulListener
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
     * @param object $event
     * @return void
     */
    public function handle($event)
    {

        //dd($event->user->email);
        dispatch(new SendRegistrationEmail($event->user));
    }
}
