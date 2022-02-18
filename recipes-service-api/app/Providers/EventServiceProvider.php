<?php

namespace App\Providers;

use App\Events\DownloadsProcessed;
use App\Listeners\DownloadsProcessedListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Laravel\Lumen\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],

        DownloadsProcessed::class => [
            DownloadsProcessedListener::class,
        ],

    ];
}
