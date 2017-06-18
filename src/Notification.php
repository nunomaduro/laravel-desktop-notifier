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

use Joli\JoliNotif\Notification as BaseNotification;
use NunoMaduro\LaravelDesktopNotifier\Contracts\Notification as NotificationContract;

/**
 * The concrete implementation of the notification.
 *
 * @author Nuno Maduro <enunomaduro@gmail.com>
 */
class Notification extends BaseNotification implements NotificationContract
{
}
