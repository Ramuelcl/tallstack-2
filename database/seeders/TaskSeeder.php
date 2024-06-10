<?php
// database/seeders/TaskSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\backend\Task; // Importa el modelo Task

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tasks = [['user_id' => 1, 'name' => 'Task uno'], ['user_id' => 1, 'name' => 'Task dos'], ['user_id' => 2, 'name' => 'Task tres']];

        foreach ($tasks as $task) {
            Task::create($task); // Usa Eloquent para crear las tareas
        }
    }
}
