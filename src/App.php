<?php

namespace GoldenComrades\WpGranularDemo;

use Javanile\Granular\Autoload;

class App extends Autoload
{
    public function run()
    {
        $this->autoload(__NAMESPACE__, __DIR__);
    }
}
