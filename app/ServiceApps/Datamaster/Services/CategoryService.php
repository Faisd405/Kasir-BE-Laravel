<?php

namespace App\ServiceApps\Datamaster\Services;

use App\ServiceApps\Datamaster\Repositories\CategoryRepository;

class CategoryService
{
    protected $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function getAll($params, $withPaginate = true)
    {
        return $this->categoryRepository->getAll($params, $withPaginate);
    }

    public function find($id, $params = [])
    {
        return $this->categoryRepository->find($id, $params);
    }

    public function create($data)
    {
        return $this->categoryRepository->create($data);
    }

    public function update($id, $data)
    {
        $this->categoryRepository->update($id, $data);
        return $this->categoryRepository->find($id);
    }

    public function delete($id)
    {
        return $this->categoryRepository->delete($id);
    }

    public function restore($id)
    {
        return $this->categoryRepository->restore($id);
    }

    public function forceDelete($id)
    {
        return $this->categoryRepository->forceDelete($id);
    }
}
