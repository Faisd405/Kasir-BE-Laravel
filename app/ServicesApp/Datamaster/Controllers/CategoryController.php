<?php

namespace App\ServicesApp\Datamaster\Controllers;

use App\BaseService\BaseController;
use App\ServicesApp\Datamaster\Facades\CategoryService;
use App\ServicesApp\Datamaster\Requests\IndexRequest;
use App\ServicesApp\Datamaster\Requests\StoreRequest;
use App\ServicesApp\Datamaster\Requests\UpdateRequest;
use App\ServicesApp\Datamaster\ResourceCollections\CategoryCollection;
use App\ServicesApp\Datamaster\ResourceCollections\CategoryResource;
use App\Utils\ResponseHelper;
use Illuminate\Http\Request;

class CategoryController extends BaseController
{
    public function index(IndexRequest $request): CategoryCollection
    {
        return new CategoryCollection(CategoryService::getAll($request->all()), 'List Data Categories');
    }

    public function show($id, Request $request)
    {
        $data = CategoryService::find($id, $request->all());

        if (!$data) {
            return ResponseHelper::notFound('Data Not Found');
        }

        return ResponseHelper::success(new CategoryResource($data));
    }

    public function store(StoreRequest $request): CategoryResource
    {
        return new CategoryResource(CategoryService::create($request->all()));
    }

    public function update($id, UpdateRequest $request)
    {
        $data = CategoryService::update($id, $request->all());

        if (!$data) {
            return ResponseHelper::notFound('Data Not Found');
        }

        return new CategoryResource($data);
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

        return new CategoryResource($data);
    }

    public function forceDelete($id)
    {
        $data = CategoryService::forceDelete($id);

        if (!$data) {
            return ResponseHelper::notFound('Data Not Found');
        }

        return new CategoryResource($data);
    }
}
