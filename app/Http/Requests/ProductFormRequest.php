<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
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
        $rules = [
            'product_name' => 'required|unique:products|max:255',
            'price' => 'required',
            'product_description' => 'required',
            'image' => ['mimes:png,jpg,jpeg', 'max:5048'],
        ];

        if (in_array($this->method(), ['POST'])) {
            $rules['image'] = ['required', 'mimes:png,jpg,jpeg', 'max:5048'];
        }

        return $rules;
    }
}
