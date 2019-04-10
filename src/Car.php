<?php

namespace GoldenComrades\WpGranularDemo;

use Javanile\Granular\Bindable;

class Car extends Bindable
{
    protected static $bindings = [
        'action:init' => 'init'
    ];

    public function init()
    {
        $this->status = 'init';
    }

    public function getStatus()
    {
        return $this->status;
    }
}
