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

Route::resource('courses', CourseController::class)->only(['index', 'show']);
Route::get('/courses/filter', [CourseController::class, 'filter'])->name('courses.filter');

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

Route::middleware(['auth'])->group(function () {
    Route::post('/courses/{course}', [CourseController::class, 'join'])->name('courses.join');
    Route::post('/courses/{course}/review', [CourseController::class, 'review'])->name('courses.review');
    
    Route::resource('lessons', LessonController::class)->only(['index', 'show']);
    Route::post('/lessons/{lesson}/comment', [LessonController::class, 'comment'])->name('lessons.comment')->middleware('joined');
    Route::post('/lessons/{lesson}/comments/{comment}/reply', [LessonController::class, 'reply'])->name('lessons.reply')->middleware('joined');
    Route::get('/lessons/{lesson}/programs/{program}', [LessonController::class, 'download'])->name('lessons.download')->middleware('joined');
    
    Route::resource('profile', UserController::class)->only('index');
    Route::post('/profile/avatar', [UserController::class, 'avatarUpdate'])->name('profile.avatar.update');
    Route::post('/profile/information', [UserController::class, 'informationUpdate'])->name('profile.information.update');
});
