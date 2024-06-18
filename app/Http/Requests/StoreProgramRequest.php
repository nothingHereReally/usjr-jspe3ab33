<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProgramRequest extends FormRequest
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
            'progid' => 'required|integer|min:1|max:99999999999|unique:college,collid',
            'progfullname' => 'required|string|max:100',
            'progshortname' => 'nullable|string|max:20',
            'progcollid' => 'required|integer|min:1|max:99999999999',
            'progcolldeptid' => 'required|integer|min:1|max:99999999999',
        ];
    }
}
