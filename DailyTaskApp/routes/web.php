<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', function () {
    $tasks = App\Models\Task::all(); // Fetch all tasks
    return view('task')->with('tasks', $tasks); // Pass tasks to the view
});


Route::post('/saveTask', 'App\Http\Controllers\TaskController@store');

Route::get('/markascompleted/{id}', 'App\Http\Controllers\TaskController@UpdateTaskAsCompleted');
Route::get('/markasnotcompleted/{id}', 'App\Http\Controllers\TaskController@UpdateTaskAsnotCompleted');

Route::get('/deletetask/{id}', 'App\Http\Controllers\TaskController@deletetask');

Route::get('/updatetask/{id}', 'App\Http\Controllers\TaskController@updatetaskview');

Route::post('/updatetasks', 'App\Http\Controllers\TaskController@updatetask');
 

