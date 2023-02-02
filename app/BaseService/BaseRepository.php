<?php

namespace App\BaseService;

use App\BaseService\Construct\BaseRepositoryInterface;
use App\ServiceApps\Supplier\Entities\Supplier;
use Illuminate\Database\Eloquent\Model;

class BaseRepository implements BaseRepositoryInterface
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    // Start BaseCore CRUD

    /**
     * @param  array  $params
     * @param  bool  $withPaginate
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getAll($params = [], $withPaginate = true)
    {
        $model = $this->model->query();

        $model->orderBy($params['sort'] ?? 'id', $params['order'] ?? 'desc');

        if (isset($params['name'])) {
            $model->where('name', 'like', '%'.$params['name'].'%');
        }

        if (isset($params['description'])) {
            $model->where('description', 'like', '%'.$params['description'].'%');
        }

        if (isset($params['search'])) {
            $model->where('name', 'like', '%'.$params['search'].'%');
        }

        if (isset($params['withTrashed'])) {
            $model->withTrashed();
        }

        if (isset($params['with'])) {
            $model->with($params['with']);
        }

        if ($withPaginate) {
            return $model->paginate($params['limit'] ?? 15);
        } else {
            return $model->get();
        }
    }

    public function find($id, $params = [])
    {
        if (empty($params)) {
            return $this->model->find($id);
        }

        $model = $this->model->query();

        if (isset($params['withTrashed'])) {
            $model->withTrashed();
        }

        return $model->find($id);
    }

    public function create($data)
    {
        return $this->model->create($data);
    }

    public function update($id, $data)
    {
        $model = $this->model->find($id);

        if (empty($model)) {
            return null;
        }

        return $model->update($data);
    }

    public function delete($id)
    {
        $model = $this->model->find($id);

        if (empty($model)) {
            return null;
        }

        return $model->delete();
    }

    public function restore($id)
    {
        $model = $this->model->onlyTrashed()->find($id);

        if (empty($model)) {
            return null;
        }

        return $model->restore();
    }

    public function forceDelete($id)
    {
        $model = $this->model->onlyTrashed()->find($id);

        if (empty($model)) {
            return null;
        }

        return $model->forceDelete();
    }

    // End BaseCore CRUD
}
