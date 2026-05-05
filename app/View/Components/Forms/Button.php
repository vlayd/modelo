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
        public string $id = '',
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
        $attr = 'type="' . $this->type . '" ' . (!empty($this->id) ? 'id="' . $this->id . '"' : '');
        $classIcon = '';
        $class = $this->class;
        if(!empty($this->modal)) {
            $tag = 'button';
            $attr = 'type="button" data-bs-toggle="modal" data-bs-target="#' . $this->modal . 'Modal"';
            $class = $this->class . ' btn_prepare_' . $this->modal;
        }elseif($this->type == 'link' || $this->text == 'Cancelar') {
            $tag = 'a';
            $attr = 'href="' . route($this->url) . '"';
            if($this->text == 'Cancelar')  $this->color = 'outline-danger';
        }
        if(!empty($this->id)) $attr .= ' id="' . $this->id . '"';
        if($this->disabled) $attr .= ' disabled';
        // if($icon) $classIcon = $icon . ' fa-lg';

        return view('components.forms.button', compact('tag', 'attr', 'width', 'class'));
    }
}
