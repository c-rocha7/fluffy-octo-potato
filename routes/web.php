<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('tasks/trashed', [TaskController::class, 'trashed'])->name('tasks.trashed');
Route::post('tasks/{id}/restore', [TaskController::class, 'restore'])->name('tasks.restore');
Route::resource('tasks', TaskController::class);
