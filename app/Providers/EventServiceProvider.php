<?php

namespace App\Providers;

use App\Events\CreateUserEvent;
use App\Listeners\CreateUserListener;
use Laravel\Lumen\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        CreateUserEvent::class => [
            CreateUserListener::class,
        ],
    ];
}
