<?php

namespace App\ServicesApp\Auth\Repositories;

use App\ServicesApp\Auth\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthRepository
{
    public function register($request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return $user;
    }

    public function login($request)
    {
        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return false;
        }

        return $user;
    }

    public function logout($request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'message' => 'Logout Success'
        ]);
    }
}
