<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/perkenalan', function () {
    return view('perkenalan');
});

Route::get('/admin/task', [TaskController::class, 'index'])->name('task.index');
Route::get('/task/{id}', [TaskController::class, 'show'])->name('task.show');


Route::get('/admin', [DashboardController::class, 'dashboard']);
