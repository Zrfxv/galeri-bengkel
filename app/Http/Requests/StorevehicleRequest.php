<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorevehicleRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'customer_id' => 'required',
            'license_plate' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'color' => 'required',
            'type' => 'required',
        ];
    }
}
