<?php

namespace App\Http\Services;

use App\Repositories\TaskRepository;
// use Illuminate\Support\Facades\Auth;


class TaskService
{
    protected $taskRepository;

    public function __construct(TaskRepository $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }

    public function getAllTask()
    {
        return $this->taskRepository->getAllTask();
    }

    public function create($data)
    {
        return $this->taskRepository->create($data);
    }

    public function update($id, $data)
    {
        $task = $this->taskRepository->findById($id);
        if (!$task){
            return null;
        }

        $this->taskRepository->update($task,$data);
    }

    public function delete($id)
    {
        $task = $this->taskRepository->findById($id);
        if (!$task) {
            return false;
        }

        return $this->taskRepository->delete($task);
    }
}

?>