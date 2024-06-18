<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStudentRequest extends FormRequest
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
            'studfirstname' => 'required|string|max:50',
            'studlastname' => 'required|string|max:50',
            'studmidname' => 'nullable|string|max:50',
            'studprogid' => 'required|integer|min:1|max:99999999999',
            'studcollid' => 'required|integer|min:1|max:99999999999',
            'studyear' => 'required|integer|min:1|max:5',
        ];
    }
}
