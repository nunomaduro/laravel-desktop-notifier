<?php

/**
 * This file is part of Laravel Desktop Notifier.
 *
 * (c) Nuno Maduro <enunomaduro@gmail.com>
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 */

namespace NunoMaduro\LaravelDesktopNotifier;

use Joli\JoliNotif\NotifierFactory;
use Illuminate\Support\ServiceProvider;
use NunoMaduro\LaravelDesktopNotifier\Contracts\Notifier as NotifierContract;
use NunoMaduro\LaravelDesktopNotifier\Contracts\Notification as NotificationContract;

/**
 * The is the Laravel Desktop Notifier service provider class.
 *
 * @author Nuno Maduro <enunomaduro@gmail.com>
 */
class LaravelDesktopNotifierServiceProvider extends ServiceProvider
{
    /**
     * Register the laravel desktop notifier implementation.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(NotifierContract::class, function ($app) {
            $config = $app['config']['app.notifiers'];

            $notifier = NotifierFactory::create(is_array($config) ? $config : []);

            return new Notifier($notifier);
        });

        $this->app->bind(NotificationContract::class, function () {
            return new Notification();
        });
    }
}
