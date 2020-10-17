<?php

namespace Nanuc\Helpers\View\Components\Tabs;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class TabContent extends Component
{
    public $id;

    /**
     * Help constructor.
     * @param $helpText
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('helpers::components.tabs.tab-content');
    }
}
