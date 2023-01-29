<?php

namespace App\ServiceApps\Supplier\Http\Requests;

use App\BaseService\BaseRequest;

class SupplierIndexRequest extends BaseRequest
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
            'address' => 'sometimes|string|max:255',
            'phone' => 'sometimes|string|max:255',
            'email' => 'sometimes|string|max:255',
            'website' => 'sometimes|string|max:255',
            'search' => 'sometimes|string|max:255',
            'sort' => 'sometimes|string|max:255',
            'order' => 'sometimes|string|max:255',
            'limit' => 'sometimes|integer',
            'withTrashed' => 'sometimes|boolean',
            'with' => 'sometimes|array',
        ];
    }
}
