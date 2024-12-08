<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('index', 'index')->name('index');
Route::view('edit', 'edit')->name('edit');


Route::get('/', [TaskController::class, 'index']); // show task
Route::post('/tasks', [TaskController::class, 'store']); // store task baru
Route::get('/tasks/{id}/edit', [TaskController::class, 'edit']); // edit task
Route::put('/tasks/{id}', [TaskController::class, 'update']); // update task
Route::delete('/tasks/{id}', [TaskController::class, 'destroy']); // delete task
