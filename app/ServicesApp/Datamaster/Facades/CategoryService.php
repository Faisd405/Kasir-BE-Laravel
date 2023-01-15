<?php

namespace App\ServicesApp\Datamaster\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class CategoryServices
 * @package App\ServicesApp\Datamaster\Facades
 * @method static \App\ServicesApp\Datamaster\Services\CategoryServices getAll(array $params = [])
 * @method static \App\ServicesApp\Datamaster\Services\CategoryServices find($id, array $params = [])
 * @method static \App\ServicesApp\Datamaster\Services\CategoryServices create(array $data = [])
 * @method static \App\ServicesApp\Datamaster\Services\CategoryServices update($id, array $data = [])
 * @method static \App\ServicesApp\Datamaster\Services\CategoryServices delete($id)
 * @method static \App\ServicesApp\Datamaster\Services\CategoryServices restore($id)
 * @method static \App\ServicesApp\Datamaster\Services\CategoryServices forceDelete($id)
 *
 * @see \App\ServicesApp\Auth\Services\CategoryServices
 */
class CategoryService extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return \App\ServicesApp\Datamaster\Services\CategoryService::class;
    }
}
