<?php
namespace PHPValueObject\Temperature;

class Kelvin extends Temperature
{
    protected function convertFromKelvin(float $kelvinValue): float
    {
        return $kelvinValue;
    }

    protected function getKelvinValue(): float
    {
        return $this->getValue();
    }

    public function getSymbol(): string
    {
        return 'K';
    }
}
