# Temperature Value Objects

[![Build Status](https://travis-ci.org/phpvalueobject/temperature.svg)](https://travis-ci.org/phpvalueobject/temperature)
[![Latest Stable Version](https://poser.pugx.org/phpvalueobject/temperature/v/stable)](https://packagist.org/packages/phpvalueobject/temperature)
[![License](https://poser.pugx.org/phpvalueobject/temperature/license)](https://packagist.org/packages/phpvalueobject/temperature)
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
    $celsius = new Celsius($temperature);

    return $celsius->getValue() > 23;
}

$temperature = new Kelvin(0);
isItWarm($temperature); // false
```

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
