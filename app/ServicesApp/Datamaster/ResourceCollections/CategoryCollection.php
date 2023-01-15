<?php

namespace App\ServicesApp\Datamaster\ResourceCollections;

use Illuminate\Http\Resources\Json\ResourceCollection;

class CategoryCollection extends ResourceCollection
{
    public function toArray($request, $message = null): array
    {
        return [
            'success' => true,
            'data' => $this->collection,
            'message' => $message,
            'errors' => [],
        ];
    }
}
