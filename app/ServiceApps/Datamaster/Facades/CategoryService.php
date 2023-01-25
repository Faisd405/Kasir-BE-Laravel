<?php

namespace App\ServiceApps\Datamaster\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class CategoryServices
 * @package App\ServiceApps\Datamaster\Facades
 * @method static \App\ServiceApps\Datamaster\Services\CategoryServices getAll(array $params = [])
 * @method static \App\ServiceApps\Datamaster\Services\CategoryServices find($id, array $params = [])
 * @method static \App\ServiceApps\Datamaster\Services\CategoryServices create(array $data = [])
 * @method static \App\ServiceApps\Datamaster\Services\CategoryServices update($id, array $data = [])
 * @method static \App\ServiceApps\Datamaster\Services\CategoryServices delete($id)
 * @method static \App\ServiceApps\Datamaster\Services\CategoryServices restore($id)
 * @method static \App\ServiceApps\Datamaster\Services\CategoryServices forceDelete($id)
 *
 * @see \App\ServiceApps\Auth\Services\CategoryServices
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
        return \App\ServiceApps\Datamaster\Services\CategoryService::class;
    }
}
