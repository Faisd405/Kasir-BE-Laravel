<?php

namespace App\ServiceApps\Category\Http\Resource;

use Illuminate\Http\Resources\Json\ResourceCollection;

class CategoryCollection extends ResourceCollection
{
    public function toArray($request, $message = null)
    {
        return $this->collection;
    }
}
