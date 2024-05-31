<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    public function index()
    {
        $tasks = Task::getAll();
        return view('task.index', [
            'tasks' => $tasks
        ]);
    }
    public function show($id)
    {
        $tasks = Task::getAll();
        return view('tasks.detail', compact('$tasks'));
    }
}
