<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $outstandingCourses = Course::homepage()->get();
        $randomCourses = Course::random()->get();
        $courseCount = Course::count();
        $lessonCount = Lesson::count();
        $learnerCount = User::count();
        return view('home', compact('outstandingCourses', 'randomCourses', 'courseCount', 'lessonCount', 'learnerCount'));
    }
}
