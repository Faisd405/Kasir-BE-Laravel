<?php

namespace App\ServiceApps\Supplier\Http\Resource;

use Illuminate\Http\Resources\Json\ResourceCollection;

class SupplierCollection extends ResourceCollection
{
    public function toArray($request, $message = null)
    {
        return $this->collection;
    }
}
