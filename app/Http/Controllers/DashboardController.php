<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $tasks = Task::where('user_id', 1)->orderBy('id', 'desc')->limit(5)->get();


        $task_counts = Task::select('status_id', \DB::raw('COUNT(*) as total'))
            ->groupBy('status_id')
            ->pluck('total', 'status_id');


        $total_tasks = array_sum(array_values($task_counts->toArray()));

        $complated_tasks = $task_counts[3] ?? 1;

        $percentage = intval($complated_tasks / $total_tasks * 100);


        return view('dashboard.index', [
            'tasks' => $tasks,
            'task_counts' => $task_counts,
            'total_tasks' => $total_tasks,
            'percentage' => $percentage
        ]);
    }
}
