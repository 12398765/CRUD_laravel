<?php

use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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

Route::get('/tareas', [TodoController::class, 'index'])->name('todos');

Route::post('/tareas', [TodoController::class, 'store'])->name('todos');

Route::get('/tareas/{id}', [TodoController::class, 'show'])->name('todos-edit');
Route::patch('/tareas/{id}', [TodoController::class, 'update'])->name('todos-update');
Route::delete('/tareas/{id}', [TodoController::class, 'destroy'])->name('todos-destroy');


Route::resource('categories', CategoriesController::class);
