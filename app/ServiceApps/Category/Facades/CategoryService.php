<?php

namespace App\ServiceApps\Category\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class CategoryServices
 *
 * @method static \App\ServiceApps\Category\Services\CategoryServices getAll(array $params = [])
 * @method static \App\ServiceApps\Category\Services\CategoryServices find($id, array $params = [])
 * @method static \App\ServiceApps\Category\Services\CategoryServices create(array $data = [])
 * @method static \App\ServiceApps\Category\Services\CategoryServices update($id, array $data = [])
 * @method static \App\ServiceApps\Category\Services\CategoryServices delete($id)
 * @method static \App\ServiceApps\Category\Services\CategoryServices restore($id)
 * @method static \App\ServiceApps\Category\Services\CategoryServices forceDelete($id)
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
        return \App\ServiceApps\Category\Services\CategoryService::class;
    }
}
