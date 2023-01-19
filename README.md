**# Help with some basic CRUD and UI using Inertia, Tailwind

[![Latest Version on Packagist](https://img.shields.io/packagist/v/alnutile/inertia-crud.svg?style=flat-square)](https://packagist.org/packages/alnutile/inertia-crud)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/alnutile/inertia-crud/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/alnutile/inertia-crud/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/alnutile/inertia-crud/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/alnutile/inertia-crud/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/alnutile/inertia-crud.svg?style=flat-square)](https://packagist.org/packages/alnutile/inertia-crud)



This will put some simple ready to go CRUD files into place. It assumes this layout

  * `app/Http/Controllers` for the controllers
  * `routes/web.php` for the routes
  * `resources/js/Components` for a few of those
  * `resources/js/Pages/` to put the resource related Vue crud

On that note it assumes:
  * Tailwind
  * VueJS 3
  * Inertia 



## TODO 
  * Grab Components too
  * Grab the route stub

You can install the package via composer:

```bash
composer require alnutile/inertia-crud
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="inertia-crud-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="inertia-crud-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="inertia-crud-views"
```

## Usage

```php
$inertiaCrud = new SundanceSolutions\InertiaCrud();
echo $inertiaCrud->echoPhrase('Hello, SundanceSolutions!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Alfred Nutile](https://github.com/alnutile)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.**
