<?php

namespace App\View\Components\Inputs;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class FormInput extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $name,
        public string $label,
        public ?string $type = 'text',
        public ?string $value = null,
        public ?string $placeholder = null,
        public bool $required = false,
    ){}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.inputs.form-input');
    }
}
