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

/**
 * Interface Notification.
 */
interface Notification
{
    /**
     * @return string
     */
    public function getTitle();

    /**
     * @param string $title
     *
     * @return \NunoMaduro\LaravelDesktopNotifier\Notification
     */
    public function setTitle($title);

    /**
     * @return string
     */
    public function getBody();

    /**
     * @param string $body
     *
     * @return \NunoMaduro\LaravelDesktopNotifier\Notification
     */
    public function setBody($body);

    /**
     * @return string
     */
    public function getIcon();

    /**
     * @param string $icon
     *
     * @return \NunoMaduro\LaravelDesktopNotifier\Notification
     */
    public function setIcon($icon);
}
