<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::paginate(14);
        $teachers = Course::select('teacher_name')->distinct()->get();
        $tags = Tag::has('courses')->get();
        return view('course.index')->with('courses', $courses)->with('teachers', $teachers)->with('tags', $tags);
    }

    public function filter(Request $request)
    {
        $courses = Course::keyword($request->keyword)
            ->teacher($request->teacher)
            ->tag($request->tag)
            ->createdat($request->createdAt)
            ->learners($request->learners)
            ->duration($request->duration)
            ->lessons($request->lessons)
            ->ratings($request->ratings)
            ->paginate(14);

        $teachers = Course::select('teacher_name')->distinct()->get();
        $tags = Tag::has('courses')->get();
        return view('course.index')->with('courses', $courses)->with('teachers', $teachers)->with('tags', $tags);
    }
}
