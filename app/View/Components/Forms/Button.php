<?php

namespace App\View\Components\Forms;

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
        public string $modal = '',
        public bool $disabled = false,
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
        $icon = $this->icon;
        $width = $this->full ? 'w-100' : '';
        $atrributes = 'type="' . $this->type . '"';
        $classIcon = '';
        if(!empty($this->modal)) {
            $tag = 'button';
            $attributes = 'type="button" data-bs-toggle="modal" data-bs-target="#' . $this->modal . 'Modal"';
            $class = $this->class . ' btn_prepare_' . $this->modal;
        }
        if($this->type == 'link' || $this->text == 'Cancelar') {
            $tag = 'a';
            $atrributes = 'href="' . route($this->url) . '"';
            if($this->text == 'Cancelar')  $this->color = 'outline-danger';
        }

        return view('components.forms.button', compact('tag', 'atrributes', 'width'));
    }
}
