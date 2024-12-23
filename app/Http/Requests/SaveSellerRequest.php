<?php

namespace App\Http\Requests;


use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rules\File;
use Illuminate\Foundation\Http\FormRequest;

class SaveSellerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return  Gate::allows("is-admin");
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name" => ["required"],
            "surname" => ["required"],
            "identity_no" => ["required"],
            "email" => ["required", "email"],
            "phone" => ["required"],
            "dob" => ["required"],
            "province" => ["required"],
            "city" => ["required"],
            "suburb" => ["required"],
            "street" => ["required"],
            "unit_no" => ["required"],
            "postal_code" => ["required"],
            "identity" => ["required"],
        ];
    }
}
