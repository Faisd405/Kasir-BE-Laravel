<?php

namespace App\ServiceApps\Category\Services;

use App\BaseService\BaseService;
use App\ServiceApps\Category\Repositories\CategoryRepository;

class CategoryService extends BaseService
{
    public function __construct(CategoryRepository $repository)
    {
        parent::__construct($repository);
    }
}
