<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BandRequest extends FormRequest
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
            'name' => 'required|string|max:100',
            'genre' => 'string|max:255',
            'founded' => 'string|max:4',
            'active_till' => 'string|max:10'
        ];
    }

    public function messages(): array
    {
        return [
            'name.max' => 'The band name can be maximal of 100 characters.',
            'genre.max' => 'a genre can be maximum of 255 characters',
            'founded.max' => 'The year can have a minum and maximum of 4 digets',
            'active_till.max' => 'or four digets or type unknown if you do not know how long the band is active'
        ];
    }
}
