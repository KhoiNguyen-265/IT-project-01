<?php

namespace App\View\Components\UI;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProductCard extends Component
{
    public $image;
    public $title;
    public $price;
    public $oldPrice;
    public $isHot;
    public $slug;

    /**
     * Create a new component instance.
     */
    public function __construct($image, $title, $price, $slug = null, $oldPrice = null, $isHot = false)
    {
        $this->image = $image;
        $this->title = $title;
        $this->price = $price;
        $this->oldPrice = $oldPrice;
        $this->isHot = $isHot;
        $this->slug = $slug;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.u-i.product-card');
    }
}
