<?php

// app/Http/Controllers/TaskController.php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Http\Services\TaskService;
class TaskController extends Controller
{

    protected $taskService;

    public function __construct(TaskService $taskService)
    {
        $this->taskService = $taskService;
    }
    public function index(Request $request)
    {
        $tasks = $this->taskService->getAllTask();
        return response()->json($tasks);
    }

    public function store(StoreTaskRequest $request)
    {
    //    dd($request);
        $data = $request->validated();
        $data['id'] = $request->user()->id;

        $task = $this->taskService->create($data);
        return response()->json($task, 201);
    }

       public function show(Task $task)
    {
        $this->authorizeTask($task);
        return response()->json($task);
    }

    public function update(UpdateTaskRequest $request, Task $task)
    {
        $this->authorizeTask($task);
        $this->taskService->update($task,$request->validated());
        return response()->json($task);
    }

    public function destroy(Task $task)
    {
        $this->authorizeTask($task);
        $this->taskService->delete($task);
        return response()->json(['message' => 'Task deleted']);
    }

    protected function authorizeTask(Task $task)
    {
        if ($task->user_id !== auth()->id()) {
            abort(403, 'Unauthorized');
        }
    }
}