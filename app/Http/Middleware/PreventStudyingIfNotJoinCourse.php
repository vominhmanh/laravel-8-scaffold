<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PreventStudyingIfNotJoinCourse
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $lesson = $request->lesson;
        if ($lesson->course->users->contains(Auth::user()->id)) {
            return $next($request);
        }
        return redirect()->route('course.show', [$lesson->course->id])->with('danger', 'Please join this course before studying.');
    }
}
