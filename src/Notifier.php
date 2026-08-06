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

use Joli\JoliNotif\NotifierInterface;
use NunoMaduro\LaravelDesktopNotifier\Contracts\Notifier as NotifierContract;

/**
 * The concrete implementation of the notifier.
 *
 * @author Nuno Maduro <enunomaduro@gmail.com>
 */
class Notifier implements NotifierContract
{
    /**
     * @var \Joli\JoliNotif\NotifierInterface
     */
    protected $notifier;

    /**
     * Notifier constructor.
     */
    public function __construct(NotifierInterface $notifier)
    {
        $this->notifier = $notifier;
    }

    /**
     * {@inheritdoc}
     */
    public function send(\Joli\JoliNotif\Notification $notification): bool
    {
        return $this->notifier->send($notification);
    }
}
