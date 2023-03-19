<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Modal;

class LiveModal extends Modal
{
    public function render()
    {
        return view('livewire.live-modal');
    }
}
