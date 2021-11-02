<?php

namespace App\Http\Controllers;

use App\Http\Requests\AvatarUpdateRequest;
use App\Http\Requests\InfomationUpdateRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {
        $user = User::find(Auth::user()->id);
        return view('profile.show', compact('user'));
    }

    public function update(Request $request)
    {
        if ($request->file('avatar_upload')) {
            return $this->avatarUpdate(new AvatarUpdateRequest($request->all()));
        } else {
            return $this->informationUpdate(new InfomationUpdateRequest($request->all()));
        }
    }

    public function avatarUpdate(AvatarUpdateRequest $request)
    {
        $user = User::find(Auth::user()->id);
        $path = $request->input('avatar_upload')->storeAs('avatars', $user->id . "." . $request->input('avatar_upload')->extension());
        $user->avatar = $path;
        $user->save();
        return redirect()->route('user.show', $user)->with('success', 'Your avatar has just been changed.');
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
        return redirect()->route('user.show', $user)->with('success', 'Your infomation has been changed successfully.');
    }
}
