<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class boton extends Component
{
    public $idName;
    public $href;
    /**
     * Create a new component instance.
     */
    public function __construct($idName = 'id', $href = '#')
    {
        $this->idName = $idName;
        $this->href = $href;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.boton');
    }
}
