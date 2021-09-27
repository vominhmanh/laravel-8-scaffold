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
Route::get('/course', [Course\CourseController::class, 'index'])->name('course');
Route::get('/course/filter', [Course\CourseController::class, 'filter'])->name('course.filter');
Route::get('/course/{course}', [Course\CourseController::class, 'detail'])->name('course.detail');
