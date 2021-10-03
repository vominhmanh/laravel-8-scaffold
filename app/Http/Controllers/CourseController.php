<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function detail(Course $course)
    {
        $otherCourses = Course::suggestion()->get();
        return view('courses.detail', compact(['course', 'otherCourses']));
    }

    public function join(Course $course)
    {
        $user = User::find(Auth::user()->id);
        $user->courses()->attach($course->id);
    }
}
