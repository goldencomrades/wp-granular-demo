<?php

namespace GoldenComrades\WpGranularDemo\Tests;

use GoldenComrades\WpGranularDemo\App;
use PHPUnit\Framework\TestCase;

class AppTest extends TestCase
{
    public function testStatus()
    {
        $app = new App([
            'add_action' => function() {},
            'add_filter' => function() {},
        ]);

        $app->run();

        $this->assertEquals($app->getStatus(), 'running');
    }
}
