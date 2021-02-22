<?php

namespace Nanuc\Helpers\View\Components;

use Carbon\Carbon;
use Illuminate\View\Component;
use Illuminate\View\View;

class DateTime extends Component
{
    public $html;
    public $raw;

    public function __construct($format = 'short', $date = 'now', $entitites = true)
    {
        $dateTime = strtotime($date);
        $datetimeString = strftime(trans('helpers::datetime.'.$format), $dateTime);

        $this->raw = Carbon::parse($dateTime)->format('Y-m-d H:i:s');
        $this->html = $entitites ? htmlentities($datetimeString) : $datetimeString;
    }

    public function render(): View
    {
        return view('helpers::components.datetime');
    }
}
