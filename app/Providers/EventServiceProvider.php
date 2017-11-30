<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

/**
 * Class EventServiceProvider.
 */
class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
//        \Acacha\Forge\Events\ServerHasBeenAssignedToUser::class => [
//            \Acacha\Forge\Listeners\SendNotificationServerHasBeenAssignedToUserToManager::class,
//        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
