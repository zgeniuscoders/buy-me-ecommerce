<?php

namespace App\Ecommerce\Products\Framework\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => ['required', 'string', 'min:3'],
            'description' => ['required', 'string', 'min:20'],
            'category_id' => ['required', 'integer'],
            'price' => ['required', 'numeric'],
            'qty' => ['required', 'integer'],
            'image' => ['required', 'image', 'mimes:jpeg,jpg,png', 'max:5120'],
            'images.*' => ['required', 'image', 'mimes:jpeg,jpg,png', 'max:5120'],
            'discount' => ['required', 'integer'],
            'status' => ['required', 'integer'],
            'has_delivered' => ["boolean"]
        ];
    }
}
