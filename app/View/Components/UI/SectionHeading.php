<?php

namespace App\View\Components\UI;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SectionHeading extends Component
{
    public $title;
    public $icon;
    public $href;
    /**
     * Create a new component instance.
     */
    public function __construct($title, $icon = null, $href = null)
    {
        $this->title = $title;
        $this->icon = $icon;
        $this->href = $href;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.u-i.section-heading');
    }
}
