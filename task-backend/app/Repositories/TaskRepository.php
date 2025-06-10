<?php
namespace App\Repositories;

use App\Models\Task;

class TaskRepository
{
    public function getAllTask()
    {
        $query = Task::get();
        return $query->paginate(10);
    }

    public function findById($id)
    {
        return Task::find($id);
    }

    public function create(array $data)
    {
        return Task::create($data);
    }

    public function update(Task $task, array $data)
    {
        return $task->update($data);
    }

    public function delete(Task $task)
    {
        return $task->delete();
    }

}


?>