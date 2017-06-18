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
use Joli\JoliNotif\Notification as ConcreteNotification;
use Joli\JoliNotif\NotifierFactory;

/**
 * Class LaravelDesktopNotifierServiceProvider.
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
        $this->app->singleton(Notifier::class, function ($app) {
            $config = $app['config']['app.notifiers'];

            return NotifierFactory::create(is_array($config) ? $config : []);
        });

        $this->app->bind(Notification::class, function () {
            return new ConcreteNotification();
        });
    }
}
