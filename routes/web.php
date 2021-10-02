<?php

namespace App\Http\Controllers;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Auth::routes();
Route::get('/courses', [CourseController::class, 'index'])->name('course');
Route::get('/courses/filter', [CourseController::class, 'filter'])->name('course.filter');
Route::get('/course/{course}', [CourseController::class, 'detail'])->name('course.detail');
Route::post('/course/{course}', [CourseController::class, 'join'])->name('course.join');
