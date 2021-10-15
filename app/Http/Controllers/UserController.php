<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::find(Auth::user()->id);
        return view('profile.show', compact('user'));
    }

    public function avatarUpdate(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $path = $request->file('avatar_upload')->storeAs('avatars', $user->id . "." . $request->file('avatar_upload')->extension());
        $user->avatar = $path;
        $user->save();

        return redirect()->route('profile');
    }
}
