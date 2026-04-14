<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Input extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $campo,
        public ?string $label=null,
        public bool $required = false,
        public ?string $type = 'text',
        public ?string $value = null,
        public ?string $placeholder = null,
        public ?string $classe = null,
        public ?string $campoId = null,
        public ?string $inputGroup = null,
        public ?string $positionGroup = null
        ){}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.input');
    }
}
