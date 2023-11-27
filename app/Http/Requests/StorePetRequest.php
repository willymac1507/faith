<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StorePetRequest extends FormRequest
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
            'name' => ['required', 'string', 'min:2'],
            'category' => ['required', 'string', 'min:2'],
            'sex' => ['required', 'string', Rule::in(['male', 'female'])],
            'age_years' => ['required', 'integer', 'gte:0'],
            'age_months' => ['required', 'integer', 'gte:0'],
            'status' => ['required', 'string', Rule::in(['available', 'adopted', 'reserved'])],
            'description' => ['required', 'string', 'min:2']
        ];
    }
}
