<?php

namespace GoldenComrades\WpGranularDemo\Tests;

use GoldenComrades\WpGranularDemo\Park;
use PHPUnit\Framework\TestCase;

class ParkTest extends TestCase
{
    public function testInit()
    {
        $park = new Car();

        $park->init()

        $this->assertEquals($park->getStatus(), 'init');
    }
}
