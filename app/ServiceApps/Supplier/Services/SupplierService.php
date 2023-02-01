<?php

namespace App\ServiceApps\Supplier\Services;

use App\BaseService\BaseService;
use App\ServiceApps\Supplier\Contracts\SupplierServiceInterface;
use App\ServiceApps\Supplier\Repositories\SupplierRepository;

class SupplierService extends BaseService implements SupplierServiceInterface
{
    public function __construct(SupplierRepository $supplierRepository)
    {
        parent::__construct($supplierRepository);
    }
}
