<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::paginate(config('variables.pagination'));
        $teachers = User::teacher()->get();
        $tags = Tag::all();
        return view('courses.index', compact(['courses', 'teachers', 'tags']));
    }

    public function filter(Request $request)
    {
        $courses = Course::filter($request->all())->paginate(config('variables.pagination'));
        $teachers = User::teacher()->get();
        $tags = Tag::all();
        return view('courses.index', compact(['courses', 'teachers', 'tags']));
    }

    public function show(Course $course)
    {
        $otherCourses = Course::suggestion()->get();
        $lessons = $course->lessons()->paginate('variables.lesson_pagination');
        return view('courses.show', compact(['course', 'lessons', 'otherCourses']));
    }

    public function join(Course $course)
    {
        $course->users()->attach([Auth::user()->id ?? false]);
        return back();
    }
}
