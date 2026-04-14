<?php

namespace App\View\Components\Icons;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class IconAction extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $type, public string $modal = '', public bool $disabled = false )
    {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $attributes = 'href="#"';
        $class = '';
        if(!empty($this->modal)) {
            $attributes = 'data-bs-toggle="modal" data-bs-target="#' . $this->modal . 'Modal"';
            $class = 'btn_prepare_' . $this->type;
        }

        $dados = match ($this->type) {
            'show' => [
                'color' => 'primary',
                'icon' => 'fas fa-eye',
                'title' => 'Visualizar',
            ],
            'edit' => [
                'color' => 'warning',
                'icon' => 'fas fa-pen',
                'title' => 'Editar',
            ],
            'delete' => [
                'color' => 'danger',
                'icon' => 'fas fa-trash',
                'title' => 'Excluir',
            ],
            'block' => [
                'color' => 'success',
                'icon' => 'fas fa-user',
                'title' => 'Bloquear',
            ],
            'unblock' => [
                'color' => 'secondary',
                'icon' => 'fas fa-user-slash',
                'title' => 'Desbloquear',
            ],
            default => [
                'color' => 'secondary',
                'icon' => 'fas fa-question',
                'title' => 'Ação Desconecida',
            ],
        };
        $tag = 'a';
        $color = $dados['color'];
        if($this->disabled) {
            $tag = 'span';
            $attributes = '';
            $color = 'secondary';
            $class .= ' disabled';

        }
        return view('components.icons.icon-action', [
            'color' => $color,
            'icon' => $dados['icon'],
            'title' => $dados['title'],
            'attributes' => $attributes,
            'tag' => $tag,
            'class' => $class,
        ]);
    }
}
