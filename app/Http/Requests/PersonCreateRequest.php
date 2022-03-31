<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonCreateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'first_name' => 'string|required|min:2',
            'last_name' => 'string|required|min:2',
        ];
    }
}
