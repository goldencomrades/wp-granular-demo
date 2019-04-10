<?php

namespace GoldenComrades\WpGranularDemo;

use Javanile\Granular\Bindable;

class Park extends Bindable
{
    protected static $bindings = [
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
