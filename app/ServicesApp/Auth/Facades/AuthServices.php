<?php

namespace App\ServicesApp\Auth\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static array register($request)
 * @method static array login($request)
 *
 * @see \App\ServicesApp\Auth\Services\AuthServices
 */
class AuthServices extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return \App\ServicesApp\Auth\Services\AuthServices::class;
    }
}
