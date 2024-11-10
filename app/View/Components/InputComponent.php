<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputComponent extends Component
{
    /**
     * Create a new components instance.
     */
    public function __construct(public string $name, public string $placeholder, public string $title, public string $type = 'text', public string $value = '', public bool $isLogin = false)
    {
        //
    }

    /**
     * Get the view / contents that represent the components.
     */
    public function render(): View|Closure|string
    {
        return view('components.input-components');
    }
}
