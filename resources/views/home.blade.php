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
            <h2>To Do</h2>
            <form action="/submit" method="post" class="add-task-form">
            <input type="text" id="ToDO" placeholder="Add new task" class="add-task-input">
            <input type="submit" value="+" class="add-task-button">
            </form>

        </div> 
    </body>
</html>
