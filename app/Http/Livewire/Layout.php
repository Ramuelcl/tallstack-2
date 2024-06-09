<?php
// app/Http/Livewire/Layout.php

namespace App\Http\Livewire;

use Livewire\Component;

class Layout extends Component
{
    public $title;

    public function render()
    {
        return view('livewire.layout');
    }
}
