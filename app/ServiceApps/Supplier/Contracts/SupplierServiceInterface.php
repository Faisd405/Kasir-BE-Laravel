<?php

namespace App\ServiceApps\Supplier\Contracts;

interface SupplierServiceInterface
{
    public function getAll($params, $withPaginate = true);

    public function find($id, $params = []);

    public function create($data);

    public function update($id, $data);

    public function delete($id);

    public function restore($id);

    public function forceDelete($id);
}
