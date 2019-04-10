<?php

namespace GoldenComrades\WpGranularDemo;

use Javanile\Granular\Bindable;

class Car extends Bindable
{
    public static $bindings = [
        'action:init' => 'init'
    ];

    protected $status;

    public function init()
    {
        $this->status = 'init';
    }

    public function getStatus()
    {
        return $this->status;
    }
}
