<?php

/**
 * This file is part of PROJECT-NAME.
 *
 * (c) Nuno Maduro <enunomaduro@gmail.com>
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 */

namespace NunoMaduro\Tests\LaravelDesktopNotifier;

use GrahamCampbell\TestBenchCore\ServiceProviderTrait;
use NunoMaduro\LaravelDesktopNotifier\Contracts\Notification;
use NunoMaduro\LaravelDesktopNotifier\Contracts\Notifier;

/**
 * This is the service provider test class.
 *
 * @author Nuno Maduro <enunomaduro@gmail.com>
 */
class ServiceProviderTest extends AbstractTestCase
{
    use ServiceProviderTrait;

    public function testNotificationIsInjectable()
    {
        $this->assertIsInjectable(Notification::class);
    }

    public function testNotifierIsInjectable()
    {
        $this->assertIsInjectable(Notifier::class);
    }
}
