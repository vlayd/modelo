<?php

namespace App\View\Components\Forms;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Input extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public bool $required = false,
        public string $type = 'text',
        public string $positionGroup = 'after',
        public string $class = 'col-12',
        public ?string $campo = null,
        public ?string $label=null,
        public ?string $value = null,
        public string $placeholder = '',
        public string $attrs = '',
        public ?string $classInput = '',
        public ?string $campoId = null,
        public ?string $inputGroup = null,
        ){}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $required = '';
        if ($this->required) {
            $required = 'required';
        }
        if($this->campo == 'password'){
            $this->label = 'Senha';
            $this->type = 'password';
            $this->attrs = 'autocomplete="on"';
            $this->placeholder = TXT_INPUT_PASSWORD;
            $required = 'required';
        }
        return view('components.forms.input', compact('required'));
    }
}
