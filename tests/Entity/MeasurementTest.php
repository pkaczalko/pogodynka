<?php

namespace App\Tests\Entity;
use App\Entity\Measurement;

use PHPUnit\Framework\TestCase;

class MeasurementTest extends TestCase
{
    public function dataGetFahrenheit(): array
    {
        return [
            [' 0.3 ', 32.54],
            ['7.8 ', 46.04],
            ['15.2 ', 59.36],
            ['22.7 ', 72.86],
            ['30.1 ', 86.18],
            ['37.6 ', 99.68],
            ['45.0 ', 113.0],
            ['52.4 ', 126.32],
            ['59.9 ', 139.82],
            ['67.3 ', 153.14]
        ];
    }

    /**
     * @dataProvider dataGetFahrenheit
     */
    public function testGetFahrenheit($celsius, $expectedFahrenheit): void
    {
        $measurement = new Measurement();
        $measurement->setCelsius($celsius);
        $this->assertEquals($expectedFahrenheit, $measurement->getFahrehneit());
        
        }
}