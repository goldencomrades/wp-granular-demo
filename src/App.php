<?php

namespace GoldenComrades\WpGranularDemo;

use Javanile\Granular\Autoload;

class App extends Autoload
{
    protected $status;

    public function run()
    {
        $this->status = 'running';
        $this->autoload(__NAMESPACE__, __DIR__);
    }

    public function getStatus()
    {
        return $this->status;
    }
}
