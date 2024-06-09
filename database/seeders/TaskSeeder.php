<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use app\models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $task = [
            ['user_id' => 1, 'name' => 'Task uno'],
            ['user_id' => 1, 'name' => 'Task dos'],
            ['user_id' => 2, 'name' => 'Task tres'],
        ];

        foreach ($tasks as $key => $task) {
          Task::insert();        }
        }
}
