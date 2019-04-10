<?php

namespace GoldenComrades\WpGranularDemo\Tests;

use GoldenComrades\WpGranularDemo\Park;
use PHPUnit\Framework\TestCase;

class ParkTest extends TestCase
{
    public function testInit()
    {
        $park = new Park();

        $park->init();

        $this->assertEquals($park->getStatus(), 'init');
    }

    public function testFooter()
    {
        $park = new Park();

        $this->assertInternalType('string', $park->adminFooterText());
        $this->assertInternalType('string', $park->updateFooter());
    }
}
