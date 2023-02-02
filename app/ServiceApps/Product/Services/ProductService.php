<?php

namespace App\ServiceApps\Product\Services;

use App\BaseService\BaseService;
use App\ServiceApps\Category\Entities\Category;
use App\ServiceApps\Category\Repositories\CategoryRepository;
use App\ServiceApps\Product\Repositories\ProductRepository;
use App\ServiceApps\Supplier\Repositories\SupplierRepository;

class ProductService extends BaseService
{
    protected $categoryRepository;
    protected $supplierRepository;

    public function __construct(
        ProductRepository $repository,
        CategoryRepository $categoryRepository,
        SupplierRepository $supplierRepository
    ) {
        parent::__construct($repository);
        $this->categoryRepository = $categoryRepository;
        $this->supplierRepository = $supplierRepository;
    }

    public function create($data)
    {
        if (isset($data['category'])) {
            $data['category_id'] = $this->categoryRepository->checkUpdateCategory($data['category']);
            unset($data['category']);
        }

        if (isset($data['supplier'])) {
            $data['supplier_id'] = $this->supplierRepository->checkUpdateSupplier($data['supplier']);
            unset($data['supplier']);
        }

        return $this->baseRepository->create($data);
    }

    public function update($id, $data)
    {
        if (isset($data['category'])) {
            $data['category_id'] = $this->categoryRepository->checkUpdateCategory($data['category']);
            unset($data['category']);
        }

        if (isset($data['supplier'])) {
            $data['supplier_id'] = $this->supplierRepository->checkUpdateSupplier($data['supplier']);
            unset($data['supplier']);
        }

        $this->baseRepository->update($id, $data);

        return $this->baseRepository->find($id);
    }

    // Utils Product Service
}
