<?php

namespace App\ServiceApps\Supplier\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class SupplierServices
 *
 * @method static \App\ServiceApps\Supplier\Services\SupplierServices getAll(array $params = [])
 * @method static \App\ServiceApps\Supplier\Services\SupplierServices find($id, array $params = [])
 * @method static \App\ServiceApps\Supplier\Services\SupplierServices create(array $data = [])
 * @method static \App\ServiceApps\Supplier\Services\SupplierServices update($id, array $data = [])
 * @method static \App\ServiceApps\Supplier\Services\SupplierServices delete($id)
 * @method static \App\ServiceApps\Supplier\Services\SupplierServices restore($id)
 * @method static \App\ServiceApps\Supplier\Services\SupplierServices forceDelete($id)
 *
 * @see \App\ServiceApps\Auth\Services\SupplierServices
 */
class SupplierService extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return \App\ServiceApps\Supplier\Services\SupplierService::class;
    }
}
