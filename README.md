# Temperature Value Objects

[![Build Status](https://travis-ci.org/PHPValueObject/Temperature.svg)](https://travis-ci.org/PHPValueObject/Temperature)
[![Latest Stable Version](https://poser.pugx.org/php-value-object/temperature/v/stable)](https://packagist.org/packages/php-value-object/temperature)
[![License](https://poser.pugx.org/php-value-object/temperature/license)](https://packagist.org/packages/php-value-object/temperature)
[![PHPStan](https://img.shields.io/badge/PHPStan-enabled-brightgreen.svg?style=flat)](https://github.com/phpvalueobject/temperature)

This repository provides Temperature ValueObject implementation for PHP that is easy to use and easily allow your classes to
depend on `Temperature` object instead of just float or string.

## Install

You can install this package via composer

`composer require php-value-object/temperature`

## Example

``` php
function isItWarm(Temperature $temperature) : bool
{
    $hot = new Celsius(23);
    if($temperature->gte($hot)) {
      return true; // t-shirt time
    }
    
    return false; // jacket time
}

$temperature = new Kelvin(0);
isItWarm($temperature); // false
```

## Usage

The temperature classes are supported: `Celsius`, `Fahrenheit` and `Kelvin`.

It is possible to compare them via helper methods:
* `eq` - equals
* `gt` - greater than
* `gte` - greater than or equals
* `lt` - less than
* `lte` - less than or equals
* `compareTo` - returns -1, 0, 1 if less than, equal or greater than

To introduce new temperature class simply extend Temperature.

## Licence

MIT

## Contributing

Any contributions are welcome

## Building & Development

The easiest way how to develop is to `git clone` and run `make`

```
git clone git@github.com:PHPValueObject/Temperature.git temperature
cd temperature
make
```
