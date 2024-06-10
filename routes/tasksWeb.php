<?php
// routes/tasksWeb.php
use Illuminate\Support\Facades\Route;
use App\Livewire\Tasks\TaskCreate;
use App\Livewire\Tasks\TaskIndex;
use App\Livewire\Tasks\TaskShow;

// Tasks
Route::get('/tasks', TaskIndex::class)->name('tasks.index');
Route::get('/tasks/create', TaskCreate::class)->name('tasks.create');
Route::get('/tasks/{task}', TaskShow::class)->name('tasks.show');
