<p align="center">
    <img src="https://raw.githubusercontent.com/nunomaduro/laravel-desktop-notifier/stable/docs/icon.png" width="50%">
</p>

<p align="center">
    <a href="https://styleci.io/repos/94141482"><img src="https://styleci.io/repos/94141482/shield" alt="StyleCI Status"></img></a>
    <a href="https://travis-ci.org/nunomaduro/laravel-desktop-notifier"><img src="https://img.shields.io/travis/nunomaduro/laravel-desktop-notifier/stable.svg?style=flat-square" alt="Build Status"></img></a>
    <a href="https://scrutinizer-ci.com/g/nunomaduro/laravel-desktop-notifier"><img src="https://img.shields.io/scrutinizer/g/nunomaduro/laravel-desktop-notifier.svg?style=flat-square" alt="Quality Score"></img></a>
    <a href="https://github.com/nunomaduro/laravel-desktop-notifier/releases"><img src="https://img.shields.io/github/release/nunomaduro/laravel-desktop-notifier.svg?style=flat-square" alt="Latest Version"></img></a>
    <a href="https://packagist.org/packages/nunomaduro/laravel-console-task"><img src="https://poser.pugx.org/nunomaduro/laravel-console-task/license.svg" alt="License"></a>
</p>

## About Laravel Desktop Notifier

Laravel Desktop Notifier was created by, and is maintained by [Nuno Maduro](https://github.com/nunomaduro), and is a [JoliNotif](https://github.com/jolicode/JoliNotif) wrapper for Laravel Console Commands. Works on Linux, Windows & MacOS.

## Installation

> **Requires [PHP 7.1+](https://php.net/releases/)**

Require Laravel Desktop Notifier using [Composer](https://getcomposer.org):

```bash
composer require nunomaduro/laravel-desktop-notifier
```

## Usage

```php

class ZondaCommand extends Command
{
    public function handle()
    {
        $this->notify('Hello Web Artisan', 'Love beautiful code? We do too!');
    }
}
```

## Contributing

Thank you for considering to contribute to Laravel Desktop Notifier. All the contribution guidelines are mentioned [here](CONTRIBUTING.md).

You can have a look at the [CHANGELOG](CHANGELOG.md) for constant updates & detailed information about the changes. You can also follow the twitter account for latest announcements or just come say hi!: [@enunomaduro](https://twitter.com/enunomaduro)

## Support the development
**Do you like this project? Support it by donating**

- PayPal: [Donate](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=66BYDWAT92N6L)
- Patreon: [Donate](https://www.patreon.com/nunomaduro)

## License

Laravel Desktop Notifier is an open-sourced software licensed under the [MIT license](LICENSE.md).
