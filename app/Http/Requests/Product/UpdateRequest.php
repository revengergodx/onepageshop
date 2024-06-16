<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string',
            'description' => 'required',
            'price' => 'required|numeric|between:0,9999999999.99',
            'image' => 'nullable|file',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Please add product name',
            'title.string' => 'Product name must be a type of string',
            'description.required' => 'Please add product description',
            'description.string' => 'Description must be a type of string',
            'price.required' => 'Please add product price',
            'price.numeric' => 'Price must be a type of integer or decimal with separator "."',
            'image.required' => 'Please add product image',
            'image.file' => 'Image must be a type of .jpg .jpeg .bmp .png',
        ];
    }
}
