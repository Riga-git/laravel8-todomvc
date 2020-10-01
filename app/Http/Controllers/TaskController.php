<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index ()
    {
        $tasks = Task::all();
        return view('task.index')->with('tasks', $tasks);
    }

    public function show( $task )
    {
        $task = Task::find($task);
        return view('task.show')->with('task', $task);
    }

    public function create( )
    {
        return view('task.create');
    }

    public function store( Request $request )
    {
        $task = Task::create($request->all());
        return view('task.show')->with('task', $task);
    }
}
