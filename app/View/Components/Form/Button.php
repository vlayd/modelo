<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Button extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $text = null,
        public ?string $icon = null,
        public bool $full = false,
        public string $class = '',
        public string $type = 'button',
        public string $url = 'javascript:void(0)',
        public string $color = 'primary',
        public string $positionIcon = 'before',
    ){}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $tag = 'button';
        $width = $this->full ? 'w-100' : '';
        $atrributes = 'type="' . $this->type . '"';
        $classIcon = '';
        if($this->type == 'link'){
            $tag = 'a';
            $atrributes = 'href="' . $this->url . '"';
        }

        return view('components.form.button', compact('tag', 'atrributes', 'width'));
    }
}
