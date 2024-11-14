<?php

namespace App\Http\Requests;

use App\Core\Domain\Enums\CategoryStatusEnum;
use App\Core\Domain\Enums\StatusEnum;
use Illuminate\Foundation\Http\FormRequest;

class AdsRequest extends FormRequest
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
            "title" => ["required", "string", "min:5"],
            "description" => ["required", "string", "min:20"],
            "sub_title" => ["required", "string", "min:5"],
            "image" => ['required', 'image', 'mimes:jpeg,jpg,png', 'max:5120'],
            "button_text" => ["required", "string", "min:4"],
            "start_at" => ["required", "date"],
            "end_at" => ["required", "date"],
            "url" => ["required", "string", "url"],
        ];
    }
}
