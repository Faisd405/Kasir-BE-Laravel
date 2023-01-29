<?php

namespace App\ServiceApps\Auth\Contracts;

interface AuthInterfaces
{
    public function register($request);

    public function login($request);
}
