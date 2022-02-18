<?php

namespace App\Providers;

use App\Events\DownloadsProcessed;
use Illuminate\Queue\Events\JobProcessed;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Queue;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */

    public function register()
    {
//        if ($this->app->isLocal()) {
//            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
//        }
    }

    /**
     * Configure global rate limiter
     *
     * @return void
     */
    public function boot()
    {
//        app(\Illuminate\Cache\RateLimiter::class)->for('global', function () {
//            return \Illuminate\Cache\RateLimiting\Limit::perMinute(60)->by(request()->ip());
//        });

        Queue::after(function (JobProcessed $event) {
            $job     =  ($event->job);
            $payload = json_encode($event->job->payload());
            \event(new DownloadsProcessed($job, $payload));
        });
    }
}
