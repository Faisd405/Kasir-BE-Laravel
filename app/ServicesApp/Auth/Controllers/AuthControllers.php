<?php

namespace App\ServicesApp\Auth\Controllers;

use App\BaseService\BaseController;
use App\Utils\ResponseHelper;
use App\ServicesApp\Auth\Requests\RegisterRequest;
use App\ServicesApp\Auth\Requests\LoginRequest;
use App\ServicesApp\Auth\Facades\AuthServices;
use Illuminate\Http\Request;
use Response;

class AuthControllers extends BaseController
{
    public function register(RegisterRequest $request)
    {
        return ResponseHelper::success(AuthServices::register($request), 'Register Success');
    }

    public function login(LoginRequest $request)
    {
        $data = AuthServices::login($request);

        if (!$data){
            return ResponseHelper::error([], 'Email or Your Password is wrong!');
        }

        return ResponseHelper::success($data, 'Login Success');
    }

    public function logout(Request $request)
    {
        $data = AuthServices::logout($request);

        return ResponseHelper::success($data, 'Logout Success');
    }

    public function refreshToken(Request $request)
    {
        $data = AuthServices::refreshToken($request);

        return ResponseHelper::success($data, 'Refresh Token Success');
    }
}
