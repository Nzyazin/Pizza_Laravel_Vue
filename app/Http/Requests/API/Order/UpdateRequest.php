<?php

namespace App\Http\Requests\API\Order;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name' => 'required|string',
            'date_of_birth' => 'required|date',
            'mob_number' => 'required|integer',
            'address' => 'required|string',
            'total_price' => 'required|integer',
        ];
    }
}
