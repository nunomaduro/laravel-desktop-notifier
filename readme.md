Laravel Desktop Notifier
================

Laravel Desktop Notifier was created by, and is maintained by [Nuno Maduro](https://github.com/nunomaduro), and is a [JoliNotif](https://github.com/jolicode/JoliNotif) wrapper for [Laravel 5](http://laravel.com). Feel free to check out the [change log](CHANGELOG.md), [releases](nunomaduro/laravel-desktop-notifier/releases), [license](LICENSE), and [contribution guidelines](CONTRIBUTING.md).

<p align="center">
	<a href="https://styleci.io/repos/94141482"><img src="https://styleci.io/repos/94141482/shield" alt="StyleCI Status"></img></a>
	<a href="https://travis-ci.org/nunomaduro/laravel-desktop-notifier"><img src="https://img.shields.io/travis/nunomaduro/laravel-desktop-notifier/stable.svg?style=flat-square" alt="Build Status"></img></a>
	<a href="https://scrutinizer-ci.com/g/nunomaduro/laravel-desktop-notifier"><img src="https://img.shields.io/scrutinizer/g/nunomaduro/laravel-desktop-notifier.svg?style=flat-square" alt="Quality Score"></img></a>
	<a href="LICENSE"><img src="https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square" alt="Software License"></img></a>
	<a href="https://github.com/nunomaduro/laravel-desktop-notifier/releases"><img src="https://img.shields.io/github/release/nunomaduro/laravel-desktop-notifier.svg?style=flat-square" alt="Latest Version"></img></a>
</p>

## Installation

[PHP](https://php.net) 5.5+

To get the latest version of Laravel Desktop Notifier, simply require the project using [Composer](https://getcomposer.org):

```bash
$ composer require nunomaduro/laravel-desktop-notifier
```

Instead, you may of course manually update your require block and run `composer update` if you so choose:

```json
{
    "require": {
        "nunomaduro/laravel-desktop-notifier": "^1.0"
    }
}
```

Once Laravel Desktop Notifier is installed, you need to register the service provider. Open up `config/app.php` and add the following to the `providers` key.

* `'NunoMaduro\LaravelDesktopNotifierServiceProvider'`

## Usage

```php
use Illuminate\Console\Command;
use NunoMaduro\LaravelDesktopNotifier\Notifier;
use NunoMaduro\LaravelDesktopNotifier\Notification;

class Zonda extends Command
{
    public function handle()
    {
        $notifier = app(Notifier::class);

        $notifier->send(
            app(Notification::class)
                ->setTitle('Notification title')
                ->setBody('This is the body of your notification')
                ->setIcon(__DIR__.'/path/to/your/icon.png')
        );
    }
}
```

## Git branching model

The git branching model used for development is the one described and assisted by `twgit` tool: [https://github.com/Twenga/twgit](https://github.com/Twenga/twgit).

## Stay In Touch

For latest releases and announcements, follow on Twitter: [@enunomaduro](https://twitter.com/enunomaduro)

## License

The Laravel Desktop Notifier is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

Copyright (c) 2017-2017 Nuno Maduro
