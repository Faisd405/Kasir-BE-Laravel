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

    public function checkUpdateCategory($nameCategory)
    {
        $category = Category::withTrashed()->where('name', $nameCategory)->first();

        if (empty($category)) {
            $category = Category::create(['name' => $nameCategory]);
        }

        if ($category['deleted_at'] != null) {
            $category->restore();
        }

        return $category['id'];
    }
}
