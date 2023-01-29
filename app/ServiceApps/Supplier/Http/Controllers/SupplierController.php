<?php

namespace App\ServiceApps\Supplier\Http\Controllers;

use App\BaseService\BaseController;
use App\ServiceApps\Supplier\Facades\SupplierService;

use App\ServiceApps\Supplier\Http\Requests\SupplierIndexRequest;
use App\ServiceApps\Supplier\Http\Requests\SupplierStoreRequest;
use App\ServiceApps\Supplier\Http\Requests\SupplierUpdateRequest;

use App\ServiceApps\Supplier\Http\Resource\SupplierCollection;
use App\ServiceApps\Supplier\Http\Resource\SupplierResource;
use App\Utils\ResponseHelper;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class SupplierController extends BaseController
{
    public function index(SupplierIndexRequest $request)
    {
        $data = SupplierService::getAll($request->all());
        return ResponseHelper::success(new SupplierCollection($data), 'List Data Categories');
    }

    public function show($id, Request $request)
    {
        $data = SupplierService::find($id, $request->all());

        if (!$data) {
            return ResponseHelper::notFound('Data Not Found');
        }

        return ResponseHelper::success(new SupplierResource($data), 'Berhasil Menampilkan Data');
    }

    public function store(SupplierStoreRequest $request)
    {
        return ResponseHelper::success(new SupplierResource(SupplierService::create($request->all()), 'Berhasil Menambahkan Data'));
    }

    public function update($id, SupplierUpdateRequest $request)
    {
        $data = SupplierService::update($id, $request->all());

        if (!$data) {
            return ResponseHelper::notFound('Data Not Found');
        }

        return ResponseHelper::success(new SupplierResource($data), 'Berhasil Mengubah Data');
    }

    public function destroy($id)
    {
        return ResponseHelper::success(SupplierService::delete($id), 'Delete Data Success');
    }

    public function restore($id)
    {
        $data = SupplierService::restore($id);

        if (!$data) {
            return ResponseHelper::notFound('Data Not Found');
        }

        return ResponseHelper::success(new SupplierResource($data), 'Restore Data Success');
    }

    public function forceDelete($id)
    {
        $data = SupplierService::forceDelete($id);

        if (!$data) {
            return ResponseHelper::notFound('Data Not Found');
        }

        return ResponseHelper::success(new SupplierResource($data), 'Force Delete Data Success');
    }
}
