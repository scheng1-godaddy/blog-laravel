<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;

class TasksController extends Controller
{
    public function index()
    {
        //$tasks = DB::table('tasks')->get();
        $tasks = Task::all();
        return view('welcome', compact('tasks'));
    }

    public function show(Task $task)
    {
        //$task = DB::table('tasks')->find($id);
        //$task= Task::find($id);
        return $task;
        // If you want to see the json, just 'return $task'

        // You can use tasks/show too below
        return view('tasks.show', compact('task'));
    }
}
