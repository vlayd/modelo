<?php

namespace App\View\Components\Forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Form extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $routeName = '',
        public string $method = 'POST',
        public bool $ajax = false,
    ){}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $attr = 'action="' . route($this->routeName) . '" method="' . $this->method . '"';
        if($this->ajax) $attr = '';
        return view('components.forms.form', compact('attr'));
    }
}
