<?php

namespace App\Http\Requests\Ourclass;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOurclassRequest extends FormRequest
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
            'image' => ['nullable','image'],
            'title' => ['required','string','max:255'],
            'duration' => ['required','string','max:255'],
            'header_description' => ['required','string','max:255'],
            'description' => ['required','string'],


        ];
    }
}
