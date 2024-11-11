<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SectionTitleComponent extends Component
{
    /**
     * Create a new components instance.
     */
    public function __construct(public string $title)
    {
        //
    }

    /**
     * Get the view / contents that represent the components.
     */
    public function render(): View|Closure|string
    {
        return view("components.section-title-component");
    }
}
