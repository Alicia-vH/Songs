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
            'titel' => 'required|string|max:100',
            'singer' => 'string|max:255',
        ];
    }
    public function messages(): array
    {
        return [
            'titel.max' => 'Een titel mag maximaal 100 characters bevaten en moet ingevuld zijn.',
            'singer.max' => 'hoeft niet persé in gevuld te zijn maximaal aantal caracters zijn 255.',
        ];
    }
}
