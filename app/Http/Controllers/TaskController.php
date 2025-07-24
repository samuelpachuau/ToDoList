<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks =Task::all();
        return view('home', compact('tasks')); 
    }

    public function store(Request $request)
    {
        Task::create([
            'title' => $request->input('title')
        ]);

        return redirect('/');
        }
    public function finish($id)
    {
        $task = Task::findOrFail($id);
        $task->completed = true;
        $task->save();

        return redirect('/');
    }

    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();

        return redirect('/');
    }

}
