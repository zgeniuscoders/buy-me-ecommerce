<?php

namespace App\Http\Requests;

use App\Profile\Domain\Enums\AccountStatusEnum;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            "name" => ["required", "string", "min:3"],
            "email" => ["required", "email"],
            "password" => ["required", "min:6", "confirmed"],
            "roles" => ["required", "integer", "exists:roles,id"],
            "status" => ["required", "in:" . implode(',', array_column(AccountStatusEnum::cases(), 'value'))]
        ];
    }
}
