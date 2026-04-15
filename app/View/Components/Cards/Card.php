<?php

namespace App\View\Components\Cards;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Card extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $width = 'col-12',
        public string $id = ''
    )
    {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cards.card');
    }
}
