<?php

namespace App\ServiceApps\Supplier\Repositories;

use App\BaseService\BaseRepository;
use App\ServiceApps\Supplier\Entities\Supplier;

class SupplierRepository extends BaseRepository
{
    public function __construct(Supplier $model)
    {
        parent::__construct($model);
    }

    public function checkUpdateSupplier($nameSupplier)
    {
        $supplier = Supplier::withTrashed()->where('name', $nameSupplier)->select('id')->first();

        if (empty($supplier)) {
            $supplier = Supplier::create(['name' => $nameSupplier]);
        }

        if ($supplier['deleted_at'] != null) {
            $supplier->restore();
        }

        return $supplier['id'];
    }
}
