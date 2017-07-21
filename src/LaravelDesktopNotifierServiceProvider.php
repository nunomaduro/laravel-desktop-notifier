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

use Illuminate\Support\ServiceProvider;
use Joli\JoliNotif\NotifierFactory;
use NunoMaduro\LaravelDesktopNotifier\Contracts\Notification as NotificationContract;
use NunoMaduro\LaravelDesktopNotifier\Contracts\Notifier as NotifierContract;

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
        $this->app->singleton('desktop.notifier', function ($app) {
            $config = $app['config']['app.notifiers'];

            $notifier = NotifierFactory::create(is_array($config) ? $config : []);

            return new Notifier($notifier);
        });

        $this->app->alias('desktop.notifier', NotifierContract::class);

        $this->app->bind('desktop.notification', function () {
            return new Notification();
        });

        $this->app->alias('desktop.notification', NotificationContract::class);
    }
}
