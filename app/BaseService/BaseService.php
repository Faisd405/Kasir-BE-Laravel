<?php

namespace App\BaseService;

use App\BaseService\BaseRepository;

class BaseService implements BaseServiceInterface
{
    protected $baseRepository;

    public function __construct(BaseRepository $baseRepository)
    {
        $this->baseRepository = $baseRepository;
    }

    public function getAll($params, $withPaginate = true)
    {
        return $this->baseRepository->getAll($params, $withPaginate);
    }

    public function find($id, $params = [])
    {
        return $this->baseRepository->find($id, $params);
    }

    public function create($data)
    {
        return $this->baseRepository->create($data);
    }

    public function update($id, $data)
    {
        $this->baseRepository->update($id, $data);

        return $this->baseRepository->find($id);
    }

    public function delete($id)
    {
        return $this->baseRepository->delete($id);
    }

    public function restore($id)
    {
        return $this->baseRepository->restore($id);
    }

    public function forceDelete($id)
    {
        return $this->baseRepository->forceDelete($id);
    }
}
