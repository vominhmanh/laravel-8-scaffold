<?php

namespace App\Http\Controllers;

use App\Http\Requests\AvatarUpdateRequest;
use App\Http\Requests\InfomationUpdateRequest;
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

    public function avatarUpdate(AvatarUpdateRequest $request)
    {
        $user = User::find(Auth::user()->id);
        $path = $request->file('avatar_upload')->storeAs('avatars', $user->id . "." . $request->file('avatar_upload')->extension());
        $user->avatar = $path;
        $user->save();
        return redirect()->route('profile')->with('success', 'Your avatar has just been changed.');
    }

    public function informationUpdate(InfomationUpdateRequest $request)
    {
        $user = User::find(Auth::user()->id);
        $user['name'] = $request['name'];
        $user['dob'] = $request['dob'];
        $user['phone_number'] = $request['phone_number'];
        $user['address'] = $request['address'];
        $user['introduction'] = $request['introduction'];
        $user->save();
        return redirect()->route('profile')->with('success', 'Your infomation has been changed successfully.');
    }
}
