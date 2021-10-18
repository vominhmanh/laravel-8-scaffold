<?php

namespace App\Http\Middleware;

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            throw ValidationException::withMessages([
                'email' => ['Please login or register first.'],
            ])->errorBag('login');
        }
    }
}
