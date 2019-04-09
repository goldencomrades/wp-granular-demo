<?php

namespace Javanile\Granular\Tests;

use Javanile\Granular\Car;
use PHPUnit\Framework\TestCase;

final class CarTest extends TestCase
{
    public function testAutoload()
    {
        $autoload = new Car([
            'add_action'                 => [FakeFunctions::class, 'alwaysTrue'],
            'add_filter'                 => [FakeFunctions::class, 'alwaysTrue'],
            'add_shortcode'              => [FakeFunctions::class, 'alwaysTrue'],
            'register_activation_hook'   => [FakeFunctions::class, 'alwaysTrue'],
            'register_deactivation_hook' => [FakeFunctions::class, 'alwaysTrue'],
        ]);

        $this->assertEquals(
            ['Javanile\\Granular\\Tests\\Fixtures\\FakePark' => []],
            $autoload->autoload('Javanile\\Granular\\Tests\\Fixtures\\', __DIR__.'/Fixtures')
        );

        $this->assertEquals(
            ['init'],
            $autoload->autoloadBindings(\stdClass::class, [
                'action:init:0:1' => 'init',
            ])
        );

        $this->assertEquals(
            ['myFilterMethod'],
            $autoload->autoloadBindings(\stdClass::class, [
                'filter:my_filter' => 'myFilterMethod',
            ])
        );

        $this->assertEquals(
            ['myShortcodeMethod'],
            $autoload->autoloadBindings(\stdClass::class, [
                'shortcode:my_shortcode' => 'myShortcodeMethod'
            ])
        );

        $this->assertEquals(
            ['myRegisterActivationHook', 'myRegisterDeactivationHook'],
            $autoload->autoloadBindings(\stdClass::class, [
                'plugin:notmatch',
                'notmatch:notmatch',
                'plugin:register_activation_hook'   => 'myRegisterActivationHook',
                'plugin:register_deactivation_hook' => 'myRegisterDeactivationHook',
            ])
        );
    }
}
