<?php

namespace App\View\Components;

use App\Ecommerce\Products\Domain\Models\Product;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProductItemComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public Product $product)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.product-item-component');
    }
}
