<?php

namespace App\Http\Requests\Pizza;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'title'=> 'nullable|string',
            'description'=> 'nullable|string',
            'preview_image'=> 'nullable',
            'price'=> 'nullable|integer',
            'old_price' => 'nullable|integer',
            'is_published'=> 'nullable|date',
        ];
    }
}
