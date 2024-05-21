<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {

        return view('hackathon-content/dash_hackathon');
    }

    public function store(Request $request)
    {

        $task = new Task();
        $task->name = $request->name;
        $task->color = '#FFA500';
        $task->start = $request->start;
        $task->finish = $request->finish;
        $task->detail = $request->detail;
        $task->person = $request->person;
        $task->save();

        return redirect()->route('dashboard_hackathon');
    }

    public function getTasks()
    {
        // Fetch all tasks from the database
        $tasks = Task::all();
        return response()->json($tasks);
    }
}
