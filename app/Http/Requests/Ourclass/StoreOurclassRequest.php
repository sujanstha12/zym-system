<?php

namespace App\Http\Requests\Ourclass;

use Illuminate\Foundation\Http\FormRequest;

class StoreOurclassRequest extends FormRequest
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
            'image' => ['required','image','mimes:png,jpg,webp'],
            'title' => ['required','string','max:255'],
            'duration' => ['required','string','max:255'],
            'header_description' => ['required','string'],
            'description' => ['required','string'],

        ];

    }
}
