<?php

namespace App\BaseService\Construct;

interface BaseServiceInterface
{
    public function __construct(BaseRepository $repository);
}
