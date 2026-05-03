<?php

namespace App\View\Components\UI;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FilterDropdown extends Component
{
    public $label;
    /**
     * Create a new component instance.
     */
    public function __construct($label = null)
    {
            $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.u-i.filter-dropdown');
    }
}
