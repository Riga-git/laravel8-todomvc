<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    private $tasks;

    public function __construct() {

        $this->tasks = collect([
            ['id' => 2, 'name' => 'Learn Laravel', 'duration' => 12],
            ['id' => 3, 'name' => 'Learn RubyOnRails', 'duration' => 24]
        ])->keyBy('id');
    }

    public function index ()
    {
        // DB access
        return view('task.index')->with('tasks', $this->tasks);
    }

    public function show( $task )
    {
        // DB access, to retrieve task with ID $task
        return view('task.show')->with('task', $this->tasks[$task]);
    }
}
