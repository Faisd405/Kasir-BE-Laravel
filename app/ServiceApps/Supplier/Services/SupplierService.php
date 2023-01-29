<?php

namespace App\ServiceApps\Supplier\Services;

use App\ServiceApps\Supplier\Contracts\SupplierServiceInterface;
use App\ServiceApps\Supplier\Repositories\SupplierRepository;

class SupplierService implements SupplierServiceInterface
{
    protected $supplierRepository;

    public function __construct(SupplierRepository $supplierRepository)
    {
        $this->supplierRepository = $supplierRepository;
    }

    public function getAll($params, $withPaginate = true)
    {
        return $this->supplierRepository->getAll($params, $withPaginate);
    }

    public function find($id, $params = [])
    {
        return $this->supplierRepository->find($id, $params);
    }

    public function create($data)
    {
        return $this->supplierRepository->create($data);
    }

    public function update($id, $data)
    {
        $this->supplierRepository->update($id, $data);

        return $this->supplierRepository->find($id);
    }

    public function delete($id)
    {
        return $this->supplierRepository->delete($id);
    }

    public function restore($id)
    {
        return $this->supplierRepository->restore($id);
    }

    public function forceDelete($id)
    {
        return $this->supplierRepository->forceDelete($id);
    }
}
