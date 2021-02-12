<?php

namespace App\Providers;

use App\Events\ShowMessageEvent;
use App\Events\UserRegistrationSuccessful;
use App\Listeners\ShowMessageListener;
use App\Listeners\UserRegistrationSuccessfulListener;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

/**
 * Class EventServiceProvider
 *
 * @package App\Providers
 */
class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        ShowMessageEvent::class => [
            ShowMessageListener::class,
        ],
        UserRegistrationSuccessful::class => [
            UserRegistrationSuccessfulListener::class
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {

    }
}
