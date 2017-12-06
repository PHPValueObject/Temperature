<?php
namespace PHPValueObject\Temperature;

class Fahrenheit extends Temperature
{
    protected function convertFromKelvin(float $kelvinValue): float
    {
        return $kelvinValue * 9/5 - 459.67;
    }

    protected function getKelvinValue(): float
    {
        return ($this->getValue() + 459.67) * 5/9;
    }

    public function getSymbol(): string
    {
        return '°F';
    }
}
