<?php

namespace App\ServiceApps\Auth\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static array register($request)
 * @method static array login($request)
 *
 * @see \App\ServiceApps\Auth\Services\AuthServices
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
        return \App\ServiceApps\Auth\Services\AuthServices::class;
    }
}
