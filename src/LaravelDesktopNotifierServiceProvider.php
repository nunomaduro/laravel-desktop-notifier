<?php

namespace NunoMaduro\LaravelDesktopNotifier;

use Joli\JoliNotif\Notifier;
use Joli\JoliNotif\Notification;
use Joli\JoliNotif\NotifierFactory;
use Illuminate\Support\ServiceProvider;

class LaravelDesktopNotifierServiceProvider extends ServiceProvider
{
    /**
     * Register the desktop notification factory implementation.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Notifier::class, function ($app) {

            $config = $app['config']['app.notifiers'];

            return NotifierFactory::create(is_array($config) ? $config : []);
        });

        $this->app->bind(Notification::class, function () {
            return new Notification;
        });
    }
}
