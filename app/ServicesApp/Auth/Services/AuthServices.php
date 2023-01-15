<?php

namespace App\ServicesApp\Auth\Services;

use App\ServicesApp\Auth\Contracts\AuthInterfaces;
use App\ServicesApp\Auth\Repositories\AuthRepository;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\PersonalAccessToken;

class AuthServices implements AuthInterfaces
{
    protected $AuthRepository;

    public function __construct(AuthRepository $AuthRepository)
    {
        $this->AuthRepository = $AuthRepository;
    }

    public function register($request)
    {
        $data['user'] = $this->AuthRepository->register($request);
        $data['token'] = $this->createToken($data['user']);

        return $data;
    }

    public function login($request)
    {
        $data['user'] = $this->AuthRepository->login($request);
        $data['token'] = $this->createToken($data['user']);

        return $data;
    }

    public function logout($request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'message' => 'Logout Success'
        ]);
    }

    public function refreshToken()
    {
        $user = Auth::user();

        $user->tokens()->delete();
        $token = $user->createToken('authToken')->plainTextToken;

        return $token;
    }

    // Utils Protected Function

    protected function createToken($user)
    {
        $token = $user->createToken('authToken')->plainTextToken;

        return $token;
    }
}
