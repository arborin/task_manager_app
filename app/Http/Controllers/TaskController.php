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
    public function index(Request $request)
    {

        $tasks = Task::where('user_id', auth()->id());

        if (!empty($request->search)) {
            $tasks->where('task_description', 'like', '%' . $request->search . '%');
        }

        if (!empty($request->status)) {
            $tasks->where('status_id', $request->status);
        }

        $tasks = $tasks->orderBy('id', 'desc')->paginate(20);



        return view('tasks.index', [
            'tasks' => $tasks,
            'task_status' => TaskStatus::select('id', 'name')->get()
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
            'user_id' => auth()->user()->id
        ]);

        return redirect()->route('tasks.list')->with('success', 'Task Created!');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        $this->authorize('view', $task);

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
        $this->authorize('update', $task);

        $task->task_description = $request->task_description;
        $task->status_id = $request->status_id;
        $task->completion_date = $request->date;

        $task->update();

        return redirect()->route('tasks.list')->with('success', 'Record updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $task = Task::findOrFail($request->task_id);
        $task->delete();
        return redirect()->route('tasks.list')->with('success', 'Record updated!');
    }
}
