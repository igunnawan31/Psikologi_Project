<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Google_Client;
use Google_Service_Gmail;
use Google_Service_Gmail_Message;

class EmailController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    public function storeEmail(Request $request)
    {
        // Validate input
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Get the logged-in user
        $user = Auth::user();

        // Setup Google Client with the user's token
        $client = new Google_Client();
        $client->setClientId(env('GOOGLE_CLIENT_ID'));
        $client->setClientSecret(env('GOOGLE_CLIENT_SECRET'));
        $client->setAccessToken($user->google_token);

        if ($client->isAccessTokenExpired()) {
            // Refresh token if expired
            $client->refreshToken($user->google_token);
        }

        $gmail = new Google_Service_Gmail($client);

        // Prepare the email
        $message = new Google_Service_Gmail_Message();
        $rawMessage = "From: {$request->email}\r\n";
        $rawMessage .= "To: {$request->targetEmail}\r\n";
        $rawMessage .= "Subject: {$request->subject}\r\n\r\n";
        $rawMessage .= $request->bodyEmail;
        $message->setRaw(base64_encode($rawMessage));

        // Send the email
        $gmail->users_messages->send('me', $message);

        return back()->with('success', 'Email successfully sent!');
    }
}
