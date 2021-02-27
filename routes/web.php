<?php

use App\Http\Controllers\ToDoController;
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

Route::get('/', [ToDoController::class , 'index']);

Route::post('/add', [ToDoController::class , 'add']) -> name('task.add');

Route::post('/refresh', [ToDoController::class , 'refresh']) -> name('task.refresh');

Route::post('/showMore', [ToDoController::class , 'showMore']) -> name('task.showMore');
