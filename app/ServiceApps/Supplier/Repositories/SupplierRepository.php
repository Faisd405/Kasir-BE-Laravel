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
}
