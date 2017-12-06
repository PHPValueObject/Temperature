<?php
namespace PHPValueObject\Temperature;

class Celsius extends Temperature
{
    protected function convertFromKelvin(float $kelvinValue): float
    {
        return $kelvinValue - 273.15;
    }

    protected function getKelvinValue(): float
    {
        return $this->getValue() + 273.15;
    }

    public function getSymbol(): string
    {
        return '°C';
    }
}
