<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskStoreRequest;
use App\Models\Task;
use App\Models\TaskStatus;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_id = 1;

        $tasks = Task::where('user_id', 1)->orderBy('id', 'desc')->paginate(20);
        return view('tasks.index', [
            'tasks' => $tasks
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $statuses = TaskStatus::get();

        return view('tasks.create', [
            'statuses' => $statuses
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TaskStoreRequest $request)
    {
        Task::create([
            'task_description' => $request->task_description,
            'status_id' => $request->status_id,
            'completion_date' => $request->date,
            'user_id' => 1
        ]);

        return redirect()->route('tasks.list')->with('success', 'Task Created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        $statuses = TaskStatus::get();

        return view('tasks.edit', [
            'task' => $task,
            'statuses' => $statuses,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TaskStoreRequest $request, Task $task)
    {
        $task->task_description = $request->task_description;
        $task->status_id = $request->status_id;
        $task->completion_date = $request->date;

        $task->update();

        return redirect()->route('tasks.list')->with('success', 'Record updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
