<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class tarjeta extends Component
{
    public $id;
    public $titulo;
    public $href;
    public $x;
    public $pie;
    /**
     * Create a new component instance.
     */
    public function __construct($id = 'id', $titulo = null, $href = "#", $x = "hidden", $pie = "hidden")
    {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->href = $href;
        $this->x = $x;
        $this->pie = $pie;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.tarjeta', [
            'tags' => $this->getTags()
        ]);
    }

    public function getTags()
    {
        return ['HTML', 'PHP', 'JS'];
    }
}
