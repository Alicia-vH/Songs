<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SongRequest extends FormRequest
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
            'title' => 'required|string|max:100',
            //'singer' => 'string|max:255',
        ];
    }
    public function messages(): array
    {
        return [
            'title.max' => 'Required, max 100 characters.',
            //'singer.max' => 'Not required, however, max characters is 255.',
        ];
    }
}
