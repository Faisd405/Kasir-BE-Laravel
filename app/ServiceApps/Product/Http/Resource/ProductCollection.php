<?php

namespace App\ServiceApps\Product\Http\Resource;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductCollection extends ResourceCollection
{
    public function toArray($request, $message = null)
    {
        return $this->collection;
    }
}
