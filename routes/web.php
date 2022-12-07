<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubactivityController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\NoteController;
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

Route::resource('users', UserController::class);

Route::resource('events', EventController::class);

Route::resource('activities', ActivityController::class);

Route::resource('categories', CategoryController::class);

Route::resource('subactivities', SubactivityController::class);

Route::resource('images', ImageController::class);

Route::resource('notes', NoteController::class);