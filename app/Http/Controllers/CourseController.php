<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::aggregating()->paginate(config('variables.pagination'));
        $teachers = User::where('role', config('variables.teacher'))->get();
        $tags = Tag::all();
        return view('courses.index', compact(['courses', 'teachers', 'tags']));
    }

    public function filter(Request $request)
    {
        $courses = Course::filter($request)->paginate(config('variables.pagination'));
        $teachers = User::where('role', config('variables.teacher'))->get();
        $tags = Tag::all();
        return view('courses.index', compact(['courses', 'teachers', 'tags']));
    }
}
