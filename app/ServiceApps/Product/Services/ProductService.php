<?php

namespace App\ServiceApps\Product\Services;

use App\BaseService\BaseService;
use App\ServiceApps\Product\Repositories\ProductRepository;

class ProductService extends BaseService
{
    public function __construct(ProductRepository $productRepository)
    {
        parent::__construct($productRepository);
    }
}
