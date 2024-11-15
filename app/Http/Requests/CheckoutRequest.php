<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\MessageBag;
use Illuminate\Validation\ValidationException;

class CheckoutRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "products.productId" => ["exists:products,id"],
            "products.productQty" => ["integer"],
            "address.phone_number" => ["required", "string"],
            "address.city" => ["required", "string", "min:3"],
            "address.address" => ["required", "string", "min:5"],
            "address.postal_code" => ["required", "integer"],
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $errors = $validator->errors()->toArray();
        $formattedErrors = [];

        foreach ($errors as $key => $messages) {
            if (str_starts_with($key, 'address.')) {
                $field = substr($key, 8);
                $formattedErrors['address'][$field] = $messages;
            } elseif (str_starts_with($key, 'products.')) {
                $field = substr($key, 9);
                $formattedErrors['products'][$field] = $messages;
            } else {
                $formattedErrors[$key] = $messages;
            }
        }


        throw new ValidationException(
            $validator
        );

    }
}
