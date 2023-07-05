# Weight conversions in PHP.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/anamarijapapic/weight-conversions.svg?style=flat-square)](https://packagist.org/packages/anamarijapapic/weight-conversions)
[![Tests](https://img.shields.io/github/actions/workflow/status/anamarijapapic/weight-conversions/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/anamarijapapic/weight-conversions/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/anamarijapapic/weight-conversions.svg?style=flat-square)](https://packagist.org/packages/anamarijapapic/weight-conversions)

Weight conversions in PHP.  
*([Spatie Laravel Package Training v2.0](https://laravelpackage.training/) - Creating a PHP package)*

## Installation

You can install the package via composer:

```bash
composer require anamarijapapic/weight-conversions
```

## Usage

```php
use AnamarijaPapic\WeightConversions\Weight;

$pounds = Weight::kilograms(100)->toPounds();

$stones = Weight::kilograms(100)->toStones();

echo "100 kg = $pounds lb = $stones st";
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/spatie/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Anamarija Papić](https://github.com/anamarijapapic)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
