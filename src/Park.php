<?php

namespace GoldenComrades\WpGranularDemo;

use Javanile\Granular\Bindable;

class Park extends Bindable
{
    public static $bindings = [
        'action:init' => 'init',
        'filter:admin_footer_text' => 'adminFooterText',
        'filter:update_footer:11' => 'updateFooter',
    ];

    protected $status;

    public function init()
    {
        $this->status = 'init';
    }

    public function adminFooterText()
    {
        return 'WP Granular Demo';
    }

    public function updateFooter()
    {
        return 'The time is '.date('H:i:s');
    }

    public function getStatus()
    {
        return $this->status;
    }
}
