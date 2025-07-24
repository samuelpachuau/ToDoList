<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TaskController::class, 'index']);

Route::post('/submit', [TaskController::class, 'store']);

Route::post('/task/{id}/finish', [TaskController::class, 'finish'])->name('task.finish');

Route::post('/task/{id}/delete', [TaskController::class, 'destroy'])->name('task.delete');