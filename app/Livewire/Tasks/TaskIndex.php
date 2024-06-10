<?php

namespace App\Livewire\Tasks;

use Livewire\Component;
use App\Models\User;
use App\Models\Task;

class TaskIndex extends Component
{
    public $tasks;
    public $name;

    public function mount()
    {
        $this->tasks = Task::with('user')->get();
    }

    public function render()
    {
        return view('livewire.tasks.task-index')
            ->layout('layouts.app')
            ->title('Task - Livewire')
            ->with(['button' => 'Nuevo']);
    }

    public function save()
    {
        dd($this->name);
    }
}
