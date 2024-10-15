<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;

class GoogleController extends Controller
{
    public function googlepage() {
        return Socialite::driver('google')->scopes(['https://mail.google.com/'])->redirect();
    }

    public function googlecallback() {
        try {
            $user = Socialite::driver('google')->stateless()->user();
            $finduser = User::where('google_id', $user->id)->first();
            // dd($user);
            if ($finduser) {
                Auth::login($finduser);
                $finduser->update([
                    'google_token' => $user->token,
                    'google_refresh_token' => $user->refreshToken ?? $finduser->google_refresh_token, // Refresh token may be null in some cases
                ]);
                return redirect()->route('contact');
            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'google_token' => $user->token, // Save access token
                    'google_refresh_token' => $user->refreshToken ?? null, // Save refresh token
                    'password' => encrypt('123456dummy')
                ]);
                // dd($newUser);
                Auth::login($newUser);

                return redirect()->route('contact');
            }

        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
