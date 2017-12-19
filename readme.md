<p align="center"><img height="120px" src="https://raw.githubusercontent.com/nunomaduro/laravel-desktop-notifier/stable/docs/icon.png"></p>

Laravel Desktop Notifier
================

Laravel Desktop Notifier was created by, and is maintained by [Nuno Maduro](https://github.com/nunomaduro), and is a [JoliNotif](https://github.com/jolicode/JoliNotif) wrapper for [Laravel](http://laravel.com). Feel free to check out the [change log](CHANGELOG.md), [releases](nunomaduro/laravel-desktop-notifier/releases), [license](LICENSE), and [contribution guidelines](CONTRIBUTING.md).

<p align="center">
	<a href="https://styleci.io/repos/94141482"><img src="https://styleci.io/repos/94141482/shield" alt="StyleCI Status"></img></a>
	<a href="https://travis-ci.org/nunomaduro/laravel-desktop-notifier"><img src="https://img.shields.io/travis/nunomaduro/laravel-desktop-notifier/stable.svg?style=flat-square" alt="Build Status"></img></a>
	<a href="https://scrutinizer-ci.com/g/nunomaduro/laravel-desktop-notifier"><img src="https://img.shields.io/scrutinizer/g/nunomaduro/laravel-desktop-notifier.svg?style=flat-square" alt="Quality Score"></img></a>
	<a href="https://github.com/nunomaduro/laravel-desktop-notifier/releases"><img src="https://img.shields.io/github/release/nunomaduro/laravel-desktop-notifier.svg?style=flat-square" alt="Latest Version"></img></a>
	<a href="https://packagist.org/packages/nunomaduro/laravel-console-task"><img src="https://poser.pugx.org/nunomaduro/laravel-console-task/license.svg" alt="License"></a>
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

## Usage with Trait

```php
use Illuminate\Console\Command;
use NunoMaduro\LaravelDesktopNotifier\Notifications;

class Zonda extends Command
{
    use Notifications;

    public function handle()
    {
        $this->notify('Hello Web Artisan', 'Love beautiful code? We do too!');
    }
}
```

## Usage with Laravel IOC container

```php
use Illuminate\Console\Command;
use NunoMaduro\LaravelDesktopNotifier\Contracts\Notifier;
use NunoMaduro\LaravelDesktopNotifier\Contracts\Notification;

class Zonda extends Command
{
    public function handle()
    {
        $notifier = app(Notifier::class);

        $notification = app(Notification::class)
            ->setTitle('Hello Web Artisan')
            ->setBody('Love beautiful code? We do too!')
            ->setIcon(__DIR__ . '/path/to/your/icon.png');

        $notifier->send($notification);
    }
}
```

## Git branching model

The git branching model used for development is the one described and assisted by `twgit` tool: [https://github.com/Twenga/twgit](https://github.com/Twenga/twgit).

## Stay In Touch

For latest releases and announcements, follow on Twitter: [@enunomaduro](https://twitter.com/enunomaduro)

## Contributing

Thank you for considering to contribute to Laravel Desktop Notifier. All the contribution guidelines are mentioned [here](CONTRIBUTING.md).

You can have a look at the [CHANGELOG](CHANGELOG.md) for constant updates & detailed information about the changes. You can also follow the twitter account for latest announcements: [@enunomaduro](https://twitter.com/enunomaduro)

## License

Laravel Desktop Notifier is an open-sourced software licensed under the [MIT license](LICENSE.md).
