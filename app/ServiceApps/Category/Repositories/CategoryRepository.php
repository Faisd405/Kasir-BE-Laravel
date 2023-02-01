<?php

namespace App\ServiceApps\Category\Repositories;

use App\BaseService\BaseRepository;
use App\ServiceApps\Category\Entities\Category;

class CategoryRepository extends BaseRepository
{
    public function __construct(Category $model)
    {
        parent::__construct($model);
    }
}
