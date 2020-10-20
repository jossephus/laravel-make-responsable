# laravel make-responsable 

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jossephus/make-responsable.svg?style=flat-square)](https://packagist.org/packages/jossephus/make-responsable)
[![Build Status](https://img.shields.io/travis/jossephus/make-responsable/master.svg?style=flat-square)](https://travis-ci.org/jossephus/make-responsable)
[![Quality Score](https://img.shields.io/scrutinizer/g/jossephus/make-responsable.svg?style=flat-square)](https://scrutinizer-ci.com/g/jossephus/make-responsable)
[![Total Downloads](https://img.shields.io/packagist/dt/jossephus/make-responsable.svg?style=flat-square)](https://packagist.org/packages/jossephus/make-responsable)

After reading a blog post by Wilbur Powery about Responsable interface I have been using responsable interfaces a lot. Read about Responsable interfaces here. [Laravel's Responsable Interface ](https://willbutpowery.dev/the-laravel-responsable-interface/) . This simple package simplifies the process of generating  a new class that implements the responsable interface.  

## Installation

You can install the package via composer:

```bash
composer require jossephus/make-responsable
```

## Usage

``` php
php artisan make:responsable TransactionCreateView // an example from the blog post 
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).