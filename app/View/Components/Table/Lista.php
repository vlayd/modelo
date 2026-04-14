<?php

namespace App\View\Components\Table;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Lista extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $title,
        public string $textButton,
    ){}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.table.lista');
    }
}
