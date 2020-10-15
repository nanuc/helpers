<?php

namespace Nanuc\Helpers\View\Components;

use Carbon\Carbon;
use Illuminate\View\Component;
use Illuminate\View\View;
use Nanuc\Helpers\Exceptions\HelpersException;

class HelpscoutBeacon extends Component
{
    public $key;

    public function __construct()
    {
        $key = config('helpers.helpscout.beacon.key');

        if(strlen($key) < 1) {
            throw new HelpersException('A key must be set. Please check https://secure.helpscout.net/settings/beacons.');
        }

        $this->key = $key;
    }

    public function render(): View
    {
        return view('helpers::components.helpscout-beacon');
    }
}
