<?php

namespace app\Controllers\Task;

use app\Models\Task;
use app\View;

class TaskController
{
    public function index(): void
    {   
        $user_id = $_SESSION['user_id'];
        $tasks = Task::filter('owner_id', $user_id);
        View::render('tasks.index', ['tasks' => $tasks]);
    }

    public function add(): void
    {   
        $user_id = $_SESSION['user_id'];
        View::render('tasks.add', [
            'tasks' => Task::filter('owner_id', $user_id),
        ]);
    }

    public function create(...$data): void
    {
        $data['owner_id'] = $_SESSION['user_id'];
        $task = Task::create($data);

        header('Location: '. '/tasks/read?id=' . $task->getId());
    }

    public function read(int $id): void
    {   
        $task = Task::find($id);
        View::render('tasks.read', ['task' => $task]);
    }

    public function edit(int $id): void
    {   
        $user_id = $_SESSION['user_id'];
        $task = Task::find($id);
        View::render('tasks.edit', [
            'task' => $task,
            'tasks' => Task::filter('owner_id', $user_id),
        ]);
    }

    public function update(int $id, ...$data): void
    {
        Task::update($id, $data, [
            'title',
            'deadline',
            'description',
        ]);
        header('Location: '.'/tasks/read?id=' . $id);
    }

    public function delete(int $id): void
    {
        Task::delete($id);
        header('Location: '.'/tasks');
    }
}