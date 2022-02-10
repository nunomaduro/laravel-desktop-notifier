<?php

/**
 * This file is part of Laravel Desktop Notifier.
 *
 * (c) Nuno Maduro <enunomaduro@gmail.com>
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 */

namespace NunoMaduro\LaravelDesktopNotifier\Contracts;

/**
 * Interface Notification.
 *
 * @author Nuno Maduro <enunomaduro@gmail.com>
 */
interface Notification
{
    /**
     * @return string
     */
    public function getTitle();

    /**
     * @param  string  $title
     * @return \NunoMaduro\LaravelDesktopNotifier\Contracts\Notification
     */
    public function setTitle(string $title): \Joli\JoliNotif\Notification;

    /**
     * @return string
     */
    public function getBody();

    /**
     * @param  string  $body
     * @return \NunoMaduro\LaravelDesktopNotifier\Contracts\Notification
     */
    public function setBody(string $body): \Joli\JoliNotif\Notification;

    /**
     * @return string
     */
    public function getIcon();

    /**
     * @param  string  $icon
     * @return \NunoMaduro\LaravelDesktopNotifier\Contracts\Notification
     */
    public function setIcon(string $icon): \Joli\JoliNotif\Notification;
}
