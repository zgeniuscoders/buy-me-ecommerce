<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class addFavoriteButton extends Component
{
    /**
     * Create a new components instance.
     */
    public function __construct(public $product)
    {
        //
    }

    /**
     * Get the view / contents that represent the components.
     */
    public function render(): View|Closure|string
    {
        return view('components.add-favorite-button');
    }
}
