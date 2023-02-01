<?php

namespace App\ServiceApps\Product\Repositories;

use App\BaseService\BaseRepository;
use App\ServiceApps\Product\Entities\Product;

class ProductRepository extends BaseRepository
{
    public function __construct(Product $model)
    {
        parent::__construct($model);
    }
}
