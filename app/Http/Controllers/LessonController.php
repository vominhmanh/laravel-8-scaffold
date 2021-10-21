<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Lesson;
use App\Models\Program;
use App\Models\Reply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function show(Lesson $lesson)
    {
        $lesson->users()->syncWithoutDetaching(Auth::user()->id);
        $comments = $lesson->comments()->paginate(config('variables.review_pagination'), ['*'], 'review_page');
        return view('lessons.show', compact('lesson', 'comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function edit(Lesson $lesson)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lesson $lesson)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lesson $lesson)
    {
        //
    }

    public function download(Lesson $lesson, Program $program)
    {
        return response()->download(storage_path('app/' . $program->path));
    }

    public function comment(Lesson $lesson, Request $request)
    {
        $comment = new Comment();
        $comment->comment = $request->comment;
        $comment->lesson_id = $request->lesson->id;
        $comment->user_id = Auth::user()->id;
        $comment->save();
        return back()->withFragment('comments');
    }

    public function reply(Lesson $lesson, Comment $comment, Request $request)
    {
        $reply = new Reply();
        $reply->comment = $request->comment;
        $reply->comment_id = $comment->id;
        $reply->user_id = Auth::user()->id;
        $reply->save();
        return back()->withFragment('comments');
    }
}
