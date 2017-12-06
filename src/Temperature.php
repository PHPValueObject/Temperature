<?php
namespace PHPValueObject\Temperature;

abstract class Temperature
{
    /**
     * @var float
     */
    private $value;

    /**
     * @param float|Temperature $value
     */
    public function __construct($value)
    {
        if ($value instanceof static) {
            $value = $value->value;
        }

        if ($value instanceof Temperature) {
            $value = $this->convertFromKelvin($value->getKelvinValue());
        }

        $this->value = $value;
    }

    abstract protected function convertFromKelvin(float $kelvinValue) : float;

    abstract protected function getKelvinValue() : float;

    abstract public function getSymbol() : string;

    public function getValue() : float
    {
        return $this->value;
    }

    public function compareTo(Temperature $temperature) : int
    {
        return $this->getKelvinValue()  <=> $temperature->getKelvinValue();
    }
}
