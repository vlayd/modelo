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
        public bool $required = false,
        public string $type = 'text',
        public ?string $label=null,
        public ?string $value = null,
        public ?string $placeholder = null,
        public ?string $class = null,
        public string $classInput = '',
        public ?string $campoId = null,
        public ?string $inputGroup = null,
        public ?string $positionGroup = 'after',
        ){}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.input');
    }
}
