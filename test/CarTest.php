<?php

namespace GoldenComrades\WpGranularDemo\Tests;

use GoldenComrades\WpGranularDemo\Car;
use PHPUnit\Framework\TestCase;

class CarTest extends TestCase
{
    public function testInit()
    {
        $car = new Car();

        $car->init();

        $this->assertEquals($car->getStatus(), 'init');
    }
}
