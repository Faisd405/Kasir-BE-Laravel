<?php

namespace App\ServicesApp\Datamaster\Requests;

use App\BaseService\BaseRequest;
use Illuminate\Validation\ValidationException;
use App\Utils\ResponseHelper;

class StoreRequest extends BaseRequest
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
            'name' => 'required|string|max:255',
            'description' => 'sometimes|string|max:255',
        ];
    }
}
