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
Route::get('/course/{course}', [CourseController::class, 'show'])->name('course.show');

Route::middleware(['auth'])->group(function () {
    Route::post('/course/{course}', [CourseController::class, 'join'])->name('course.join');
    Route::post('/course/{course}/review', [CourseController::class, 'review'])->name('course.review');
    Route::get('/lessons', [LessonController::class, 'index'])->name('lesson');
    Route::get('/lesson/{lesson}', [LessonController::class, 'show'])->name('lesson.show')->middleware('joined');
    Route::post('/lesson/{lesson}/comment', [LessonController::class, 'comment'])->name('lesson.comment')->middleware('joined');
    Route::post('/lesson/{lesson}/comment/{comment}/reply', [LessonController::class, 'reply'])->name('lesson.reply')->middleware('joined');
    Route::get('/lesson/{lesson}/program/{program}', [LessonController::class, 'download'])->name('lesson.download')->middleware('joined');
});
