<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function googleAuth(Request $request)
    {
        $googleToken = $request->input('token');
        Log::info("Token diterima dari frontend: " . $googleToken);

        $googleResponse = Http::get('https://www.googleapis.com/oauth2/v3/tokeninfo', [
            'id_token' => $googleToken,
        ]);

        if ($googleResponse->failed()) {
            return response()->json(['message' => 'Invalid Google token'], 401);
        }

        $googleUser = $googleResponse->json();

        $user = User::where('email', $googleUser['email'])->first();

        if (!$user) {
            $user = User::create([
                'name' => $googleUser['name'],
                'email' => $googleUser['email'],
                'password' => Hash::make(uniqid()),
            ]);
        }

        $token = $user->createToken('authToken')->plainTextToken;

        return response()->json([
            'user' => $user,
            'token' => $token
        ]);
    }
}
