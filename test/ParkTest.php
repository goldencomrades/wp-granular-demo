<?php

namespace GoldenComrades\WpGranularDemo\Tests;

use GoldenComrades\WpGranularDemo\Park;
use PHPUnit\Framework\TestCase;

class ParkTest extends TestCase
{
    public function testCallback()
    {
        $this->assertEquals($fakeRefMethod(), 'fakeRefMethod');
    }
}
