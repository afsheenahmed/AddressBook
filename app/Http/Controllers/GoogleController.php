<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{

public function googlepage()
{
    return Socialite::driver('google')->redirect();
}

public function googlecallback()
{
    try {
        $googleUser = Socialite::driver('google')->user();

        $user = User::firstOrCreate(
            ['email' => $googleUser->getEmail()],
            [
                'name' => $googleUser->getName(),
                'google_id' => $googleUser->getId(),
                'password' => bcrypt('default_password'), // optional
            ]
        );

        Auth::login($user);

        return redirect()->intended('/dashboard');
    } catch (\Exception $e) {
        return redirect('/')->with('error', 'Failed to login with Google.');
    }
}
}