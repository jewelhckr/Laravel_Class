<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

// Users
Route::get('/index', [UserController::class, 'index']);
Route::post('/register', [UserController::class, 'register']);
Route::get('/displayUsers', [UserController::class, 'displayUsers']);

// TodoApp
Route::get('/todo', [TodoController::class, 'showTodo']);
Route::post('/showtodo', [TodoController::class, 'addTodo']);
Route::get('/displaytodo', [TodoController::class, 'displayTodo']);

// NoteApp
Route::post('/noteprocess', [NoteController::class, 'addnote']);
Route::get('/note', [NoteController::class, 'shownote']);
Route::get('/display', [NoteController::class, 'display']);
Route::get('/view/{id}', [NoteController::class, 'show']);
Route::get('/display/edit/{id}', [NoteController::class, 'edit']);
Route::post('/display/edit/{id}', [NoteController::class, 'update']);

// Contacts App
Route::get('/contacts', [ContactController::class, 'index']);
Route::post('/contactprocess', [ContactController::class, 'addContact']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
