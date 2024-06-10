<?php

namespace App\Livewire\Tasks;

use Livewire\Component;

class TaskCreate extends Component
{
    #[layout('layouts.app')]
    public function render()
    {
        return view('livewire.tasks.task-create');
    }
}
