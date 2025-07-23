<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks =Task::all();
        return view('home', compact('tasks')); // this means resources/views/tasks.blade.php
    }

    public function store(Request $request)
    {
        Task::create([
            'title' => $request->input('title')
        ]);

        return redirect('/');
    }

}
