# Uptime Robot API

[![Latest Version on Packagist][ico-version]](https://packagist.org/packages/montross50/uptime-robot-api)
[![Software License][ico-license]](LICENSE.md)
[![Total Downloads](https://img.shields.io/packagist/dt/montross50/uptime-robot-api.svg?style=flat-square)](https://packagist.org/packages/montross50/uptime-robot-api)

API wrapper for [UptimeRobot](https://uptimerobot.com)

## Install

Via Composer

``` bash
$ composer require montross50/uptime-robot-api
```

This version (6.\*) supports Laravel 6.X only. If you need <= 5.X checkout a previous version.

## Config

Publish the config file
~~~
php artisan vendor:publish --provider="Montross50\UptimeRobotApi\UptimeRobotApiServiceProvider" --tag=config
~~~

OR use the env
~~~
UPTIMEROBOT_API_KEY // default: null
~~~
## Usage

``` php
$api = \App::make(UptimeRobotResourceInterface::class);
echo $api->getMonitors();
```

For uptime robot api reference [api](https://uptimerobot.com/api)

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email sch43228@gmail.com instead of using the issue tracker.

## Credits

- Trent Schmidt

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/montross50/uptime-robot-api.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/montross50/uptime-robot-api.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/montross50/uptime-robot-api
[link-downloads]: https://packagist.org/packages/montross50/uptime-robot-api
[link-author]: https://github.com/montross50
[link-contributors]: ../../contributors
