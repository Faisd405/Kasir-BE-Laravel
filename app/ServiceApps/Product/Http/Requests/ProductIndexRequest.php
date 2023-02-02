<?php

namespace App\ServiceApps\Product\Http\Requests;

use App\BaseService\BaseRequest;

class ProductIndexRequest extends BaseRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'sometimes|string|max:255',
            'description' => 'sometimes|string|max:255',
            'quantity' => 'sometimes|string|max:255',
            'price' => 'sometimes|string|max:255',
            'image' => 'sometimes|string|max:255',
            'category_id' => 'sometimes|integer|max:255',
            'supplier_id' => 'sometimes|integer|max:255',

            'search' => 'sometimes|string|max:255',
            'sort' => 'sometimes|string|max:255',
            'order' => 'sometimes|string|max:255',
            'limit' => 'sometimes|integer',
            'withTrashed' => 'sometimes|boolean',
            'with' => 'sometimes|array',
        ];
    }
}
