<?php

namespace App\ServiceApps\Category\Http\Controllers;

use App\BaseService\BaseController;
use App\ServiceApps\Category\Facades\CategoryService;

use App\ServiceApps\Category\Http\Requests\CategoryIndexRequest;
use App\ServiceApps\Category\Http\Requests\CategoryStoreRequest;
use App\ServiceApps\Category\Http\Requests\CategoryUpdateRequest;

use App\ServiceApps\Category\Http\Resource\CategoryCollection;
use App\ServiceApps\Category\Http\Resource\CategoryResource;
use App\Utils\ResponseHelper;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class CategoryController extends BaseController
{
    public function index(CategoryIndexRequest $request)
    {
        $data = CategoryService::getAll($request->all());
        return ResponseHelper::success(new CategoryCollection($data), 'List Data Categories');
    }

    public function show($id, Request $request)
    {
        $data = CategoryService::find($id, $request->all());

        if (!$data) {
            return ResponseHelper::notFound('Data Not Found');
        }

        return ResponseHelper::success(new CategoryResource($data), 'Berhasil Menampilkan Data');
    }

    public function store(CategoryStoreRequest $request)
    {
        return ResponseHelper::success(new CategoryResource(CategoryService::create($request->all()), 'Berhasil Menambahkan Data'));
    }

    public function update($id, CategoryUpdateRequest $request)
    {
        $data = CategoryService::update($id, $request->all());

        if (!$data) {
            return ResponseHelper::notFound('Data Not Found');
        }

        return ResponseHelper::success(new CategoryResource($data), 'Berhasil Mengubah Data');
    }

    public function destroy($id)
    {
        return ResponseHelper::success(CategoryService::delete($id), 'Delete Data Success');
    }

    public function restore($id)
    {
        $data = CategoryService::restore($id);

        if (!$data) {
            return ResponseHelper::notFound('Data Not Found');
        }

        return ResponseHelper::success(new CategoryResource($data), 'Restore Data Success');
    }

    public function forceDelete($id)
    {
        $data = CategoryService::forceDelete($id);

        if (!$data) {
            return ResponseHelper::notFound('Data Not Found');
        }

        return ResponseHelper::success(new CategoryResource($data), 'Force Delete Data Success');
    }
}
