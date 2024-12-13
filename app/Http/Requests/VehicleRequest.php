<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Http\FormRequest;

class VehicleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Gate::allows("is-seller");
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "make" => ["required"],
            "model" => ["required"],
            "year" => ["required"],
            "condition" => ["required"],
            "mileage" => ["required"],
            "body_type" => ["required"],
            "colour" => ["required"],
            "description" => ["required"],
            "drive" => ["required"],
            "code" => ["required"],
            "number_of_seats" => ["required"],
            "number_of_doors" => ["required"],
            "fuel_type" => ["required"],
            "tank_capacity" => ["required"],
            "engine_capacity" => ["required"],
            "gears" => ["required"],
            "cylinder_layout" => ["required"],
            "reserved_price" => ["required"],
            "images" => ["required"],
            "docs" => ["required"],
            "transmission" => ["required"],
            "fuel_consumption" => ["required"],
        ];
    }
}
