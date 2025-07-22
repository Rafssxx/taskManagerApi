<?php

namespace App\services;

use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserService
{
    public function authenticate($request): \Illuminate\Http\JsonResponse
    {

        if (Auth::check()) {
            return response()->json([
                "message" => "User is already authenticated.",
                "user" => Auth::user(),
            ], 200);
        }

        $user = User::where('email', $request['email'])->first();
        if(!$user || !Hash::check($request['password'], $user->password)) {
            return response()->json([
                "message" => "The provided credentials are incorrect."
            ]);
        }
        $user->tokens()->delete();

        $token = $user->createToken('auth_token')->plainTextToken;
        return response()->json([
            'user' => $user,
            'access_token' => $token,
        ],201);
    }
}
