<?php
namespace PHPValueObject\Temperature\Tests;

use PHPUnit\Framework\TestCase;
use PHPValueObject\Temperature\Celsius;
use PHPValueObject\Temperature\Fahrenheit;
use PHPValueObject\Temperature\Kelvin;

class TemperatureTest extends TestCase
{
    public function testConversionFromKelvinToCelsius()
    {
        $kelvin = new Kelvin(0);
        $celsius = new Celsius($kelvin);
        $this->assertSame(-273.15, $celsius->getValue());
    }

    public function testConversionFromFahrenheitToCelsius()
    {
        $fahrenheit = new Fahrenheit(0);
        $celsius = new Celsius($fahrenheit);
        $this->assertEquals(-17.777777, $celsius->getValue(), '', 0.000001);
    }

    public function testCreateCelsiusFromCelsius()
    {
        $celsius = new Celsius(12.768);
        $celsius2 = new Celsius($celsius);
        $this->assertSame(12.768, $celsius2->getValue());
        $this->assertEquals($celsius, $celsius2);
        $this->assertNotSame($celsius, $celsius2);
    }

    public function testCompareToDifferentValuesReturnsPositiveAndNegativeOnes()
    {
        $kelvinLow = new Kelvin(0);
        $kelvinHigh = new Kelvin(200);

        $this->assertSame(-1, $kelvinLow->compareTo($kelvinHigh));
        $this->assertSame(1, $kelvinHigh->compareTo($kelvinLow));
    }

    public function testCompareToReturnsZeroIfValuesAreSame()
    {
        $kelvin1 = new Kelvin(0);
        $kelvin2 = new Kelvin(0);

        $this->assertSame(0, $kelvin1->compareTo($kelvin2));
    }

    public function testEq()
    {
        $kelvin1 = new Kelvin(0);
        $kelvin2 = new Kelvin(0);
        $kelvin3 = new Kelvin(1);

        $this->assertTrue($kelvin1->eq($kelvin2));
        $this->assertFalse($kelvin1->eq($kelvin3));
    }

    public function testGt()
    {
        $kelvin1 = new Kelvin(1);
        $kelvin2 = new Kelvin(0);

        $this->assertTrue($kelvin1->gt($kelvin2));
        $this->assertFalse($kelvin1->gt($kelvin1));
        $this->assertFalse($kelvin2->gt($kelvin1));
    }

    public function testGte()
    {
        $kelvin1 = new Kelvin(1);
        $kelvin2 = new Kelvin(0);

        $this->assertTrue($kelvin1->gte($kelvin2));
        $this->assertTrue($kelvin1->gte($kelvin1));
        $this->assertFalse($kelvin2->gte($kelvin1));
    }

    public function testLt()
    {
        $kelvin1 = new Kelvin(1);
        $kelvin2 = new Kelvin(0);

        $this->assertFalse($kelvin1->lt($kelvin2));
        $this->assertFalse($kelvin1->lt($kelvin1));
        $this->assertTrue($kelvin2->lt($kelvin1));
    }

    public function testLte()
    {
        $kelvin1 = new Kelvin(1);
        $kelvin2 = new Kelvin(0);

        $this->assertFalse($kelvin1->lte($kelvin2));
        $this->assertTrue($kelvin1->lte($kelvin1));
        $this->assertTrue($kelvin2->lte($kelvin1));
    }
}
