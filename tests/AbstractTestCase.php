<?php

/**
 * This file is part of Laravel Desktop Notifier.
 *
 * (c) Nuno Maduro <enunomaduro@gmail.com>
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 */

namespace NunoMaduro\Tests\LaravelDesktopNotifier;

use GrahamCampbell\TestBench\AbstractPackageTestCase;
use NunoMaduro\LaravelDesktopNotifier\LaravelDesktopNotifierServiceProvider;

/**
 * Class AbstractTestCase.
 *
 * @author Nuno Maduro <enunomaduro@gmail.com>
 */
abstract class AbstractTestCase extends AbstractPackageTestCase
{
    /**
     * Get the service provider class.
     */
    protected static function getServiceProviderClass(): string
    {
        return LaravelDesktopNotifierServiceProvider::class;
    }
}
