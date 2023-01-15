<?php

namespace App\ServicesApp\Auth\Contracts;

interface AuthInterfaces
{
    public function register($request);
    public function login($request);
}
