<?php

namespace App\ServiceApps\Product\Http\Controllers;

use App\BaseService\BaseController;
use App\ServiceApps\Product\Facades\ProductService;
use App\ServiceApps\Product\Http\Requests\ProductIndexRequest;
use App\ServiceApps\Product\Http\Requests\ProductStoreRequest;
use App\ServiceApps\Product\Http\Requests\ProductUpdateRequest;
use App\ServiceApps\Product\Http\Resource\ProductCollection;
use App\ServiceApps\Product\Http\Resource\ProductResource;
use App\Utils\ResponseHelper;
use Illuminate\Http\Request;

class ProductController extends BaseController
{
    public function index(ProductIndexRequest $request)
    {
        $data = ProductService::getAll($request->all());

        return ResponseHelper::success(new ProductCollection($data), 'List Data Categories');
    }

    public function show($id, Request $request)
    {
        $data = ProductService::find($id, $request->all());

        if (! $data) {
            return ResponseHelper::notFound('Data Not Found');
        }

        return ResponseHelper::success(new ProductResource($data), 'Berhasil Menampilkan Data');
    }

    public function store(ProductStoreRequest $request)
    {
        return ResponseHelper::success(new ProductResource(ProductService::create($request->all()), 'Berhasil Menambahkan Data'));
    }

    public function update($id, ProductUpdateRequest $request)
    {
        $data = ProductService::update($id, $request->all());

        if (! $data) {
            return ResponseHelper::notFound('Data Not Found');
        }

        return ResponseHelper::success(new ProductResource($data), 'Berhasil Mengubah Data');
    }

    public function destroy($id)
    {
        return ResponseHelper::success(ProductService::delete($id), 'Delete Data Success');
    }

    public function restore($id)
    {
        $data = ProductService::restore($id);

        if (! $data) {
            return ResponseHelper::notFound('Data Not Found');
        }

        return ResponseHelper::success(new ProductResource($data), 'Restore Data Success');
    }

    public function forceDelete($id)
    {
        $data = ProductService::forceDelete($id);

        if (! $data) {
            return ResponseHelper::notFound('Data Not Found');
        }

        return ResponseHelper::success(new ProductResource($data), 'Force Delete Data Success');
    }
}
