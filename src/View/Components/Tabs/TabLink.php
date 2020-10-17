<?php

namespace Nanuc\Helpers\View\Components\Tabs;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class TabLink extends Component
{
    public $id;
    public $title;
    public $type;
    public $icon;
    public $onclick;

    /**
     * Help constructor.
     * @param $helpText
     */
    public function __construct($id, $title, $type = 'underline', $icon = '', $onclick = null)
    {
        $this->id = $id;
        $this->title = __($title);
        $this->type = $type;
        $this->icon = $icon;
        $this->onclick = $onclick;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('helpers::components.tabs.tab-link');
    }
}
