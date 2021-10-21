<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class GoogleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToGoogle()
    {
        Session::put('url.intended', url()->previous());
        return Socialite::driver('google')->redirect();
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            $finduser = User::where('email', $user->email)->first();

            if ($finduser) {
                Auth::login($finduser);
                return redirect(Session::get('url.intended'))->with('success', 'Login successfully.');
            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'password' => bcrypt('12345678'),
                    'avatar' => $user->avatar,
                    'google_id' => $user->id,
                ]);
                Auth::login($newUser);
                return redirect()->route('profile');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
