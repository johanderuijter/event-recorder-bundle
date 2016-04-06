# event-recorder-bundle

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Total Downloads][ico-downloads]][link-downloads]

Symfony bundle for `jdr/event-recorder`.

## Install

Via Composer

``` bash
$ composer require jdr/event-recorder-bundle
```

## Usage

Add to `AppKernel`

``` php
<?php

public function registerBundles()
{
    $bundles = [
        // ...
        new JDR\EventRecorderBundle\JDREventRecorderBundle(),
        // ...
    ];

    return $bundles;
}
```

For usage examples see [jdr/event-recorder][link-event-recorder].

In order to use the tactician middleware, add the following to your configuration file.

``` yaml
# Tactician Configuration
tactician:
    commandbus:
        default:
            middleware:
                - jdr.event_recorder.release_recorded_events
                # ...
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ bin/phpspec run
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email dev@johanderuijter.nl instead of using the issue tracker.

## Credits

- [Johan de Ruijter][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/jdr/event-recorder-bundle.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/jdr/event-recorder-bundle.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/jdr/event-recorder-bundle
[link-downloads]: https://packagist.org/packages/jdr/event-recorder-bundle
[link-author]: https://github.com/johanderuijter
[link-contributors]: ../../contributors

[link-event-recorder]: https://github.com/johanderuijter/event-recorder
