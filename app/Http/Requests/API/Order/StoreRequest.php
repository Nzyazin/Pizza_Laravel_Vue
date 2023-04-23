<?php

namespace App\Http\Requests\API\Order;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * @return array
     */
    public function rules()
    {
        return [
            'products' => 'required|array',
            'name' => 'nullable|string',
            'date_of_birth' => 'nullable|date',
            'mob_number' => 'nullable|string',
            'address' => 'nullable|string',
            'total_price' => 'nullable|integer',
        ];
    }
}
