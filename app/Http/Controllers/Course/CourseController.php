<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Tag;
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
        $courses = Course::paginate(14);
        $teachers = Course::select('teacher_name')->distinct()->get();
        $tags = Tag::has('courses')->get();
        return view('course.index')->with('courses', $courses)->with('teachers', $teachers)->with('tags', $tags);
    }

    public function filter(Request $request)
    {
        $requestTag = $request->tag;
        $courses = Course::query();

        if ($request->teacher != null) {
            $courses->where('teacher_name', $request->teacher);
        }

        if ($request->tag != null) {
            $courses = $courses->whereHas('tags', function ($q) use ($requestTag) {
                $q->where('name', $requestTag);
            });
        }

        if ($request->createdAt != null) {
            $courses->orderBy('created_at', $request->createdAt);
        }

        if ($request->learners != null) {
            $courses->orderBy('learners', $request->learners);
        }

        if ($request->duration != null) {
            $courses->orderBy('duration', $request->duration);
        }

        if ($request->lessons != null) {
            $courses->orderBy('lessons', $request->lessons);
        }

        if ($request->ratings != null) {
            $courses->orderBy('reviews', $request->ratings);
        }

        $courses = $courses->get();

        $teachers = Course::select('teacher_name')->distinct()->get();
        return view('course.index')->with('courses', $courses)->with('teachers', $teachers);
    }
}
