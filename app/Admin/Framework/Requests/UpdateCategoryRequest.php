<?php

namespace App\Admin\Framework\Requests;

use App\Core\Domain\Enums\CategoryStatusEnum;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
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
            "name" => ["required", "string"],
            "category_id" => ["nullable", "exists:categories,id"],
            'image' => ['nullable', 'image', 'mimes:jpeg,jpg,png', 'max:5120'],
            "status" => ["required", "in:" . implode(',', array_column(CategoryStatusEnum::cases(),'value'))]
        ];
    }
}
