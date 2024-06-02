<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::getAll();
        return view('admin.task.index', compact('tasks'));
    }

    public function show($id)
    {
        $task = Task::find($id);
        return view('task.detail', compact('task'));
    }
}
