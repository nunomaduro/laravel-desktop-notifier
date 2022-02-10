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

use Joli\JoliNotif\Notifier as BaseNotifier;
use NunoMaduro\LaravelDesktopNotifier\Contracts\Notifier as NotifierContract;

/**
 * The concrete implementation of the notifier.
 *
 * @author Nuno Maduro <enunomaduro@gmail.com>
 */
class Notifier implements NotifierContract
{
    /**
     * @var \Joli\JoliNotif\Notifier
     */
    protected $notifier;

    /**
     * Notifier constructor.
     *
     * @param  \Joli\JoliNotif\Notifier  $notifier
     */
    public function __construct(BaseNotifier $notifier)
    {
        $this->notifier = $notifier;
    }

    /**
     * {@inheritdoc}
     */
    public function isSupported(): bool
    {
        return $this->notifier->isSupported();
    }

    /**
     * {@inheritdoc}
     */
    public function getPriority(): int
    {
        return $this->notifier->getPriority();
    }

    /**
     * {@inheritdoc}
     */
    public function send(\Joli\JoliNotif\Notification $notification): bool
    {
        return $this->notifier->send($notification);
    }
}
