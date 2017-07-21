<?php

/**
 * This file is part of Laravel Desktop Notifier.
 *
 * (c) Nuno Maduro <enunomaduro@gmail.com>
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 */

namespace NunoMaduro\LaravelDesktopNotifier\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * The is the Laravel Desktop Notifier facade class.
 *
 * @author Nuno Maduro <enunomaduro@gmail.com>
 */
class Notifier extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'desktop.notifier';
    }
}
