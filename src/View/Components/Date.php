<?php

namespace Nanuc\Helpers\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;
use Nanuc\Helpers\Support\Timezone;

class Date extends Component
{
    public $formatted;

    public function __construct($dateType = 'MEDIUM', $timeType = 'SHORT', $date = null)
    {
        $this->formatted = Timezone::format($dateType, $timeType, $date);
    }

    public function render(): View
    {
        return view('helpers::components.date');
    }
}
