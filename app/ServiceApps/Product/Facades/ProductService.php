<?php

namespace App\ServiceApps\Product\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class ProductServices
 *
 * @method static \App\ServiceApps\Product\Services\ProductServices getAll(array $params = [])
 * @method static \App\ServiceApps\Product\Services\ProductServices find($id, array $params = [])
 * @method static \App\ServiceApps\Product\Services\ProductServices create(array $data = [])
 * @method static \App\ServiceApps\Product\Services\ProductServices update($id, array $data = [])
 * @method static \App\ServiceApps\Product\Services\ProductServices delete($id)
 * @method static \App\ServiceApps\Product\Services\ProductServices restore($id)
 * @method static \App\ServiceApps\Product\Services\ProductServices forceDelete($id)
 *
 * @see \App\ServiceApps\Auth\Services\ProductService
 */
class ProductService extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return \App\ServiceApps\Product\Services\ProductService::class;
    }
}
