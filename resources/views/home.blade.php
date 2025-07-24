<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/app.css', 'resources/js/app.js'])


        <title>ToDoList</title>
    </head>
    <body>
        <div class="container">

            <h2>To Do List</h2>

            <form action="/submit" method="post" class="add-task-form">
            @csrf
            <input type="text" id="ToDO" name="title" placeholder="Add new task" class="add-task-input">
            <input type="submit" value="+" class="add-task-button">
            </form>

            <div class="task-list">
                @foreach ($tasks as $task)
                    <div class="task-row">
                        <div class="task-item {{ $task->completed ? 'completed' : '' }}">
                            {{ $task->title }}
                        </div>

                        <div class="task-actions">
                            @if (!$task->completed)
                                <form action="{{ route('task.finish', $task->id) }}" method="POST">
                                    @csrf
                                    <button class="finish-btn">✔</button>
                                </form>
                            @endif

                            <form action="{{ route('task.delete', $task->id) }}" method="POST">
                                @csrf
                                <button class="delete-btn">🗑</button>
                            </form>
                        </div>
                    </div>
                @endforeach

            </div>

        </div> 
    </body>
</html>
