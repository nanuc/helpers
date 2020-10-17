<?php

namespace Nanuc\Helpers\View\Components\Tabs;

use Illuminate\View\Component;

class Tabs extends Component
{
    public $activeElement;
    public $direction;

    /**
     * Help constructor.
     * @param $helpText
     */
    public function __construct($activeElement = null, $direction = 'tabs-horizontal')
    {
        $this->activeElement = $activeElement;
        $this->direction = $direction;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('helpers::components.tabs.tabs');
    }
}
