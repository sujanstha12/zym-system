<?php

namespace App\Http\Requests\Instructor;

use Illuminate\Foundation\Http\FormRequest;

class UpdateInstructorRequest extends FormRequest
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
            'name' => ['required','string','max:255'],
            'image' => ['nullable','image'],
            'post' => ['required','string','max:255'],
            'contact_number' => ['required','numeric'],
            'facebook_url' => ['nullable','string'],
            'twitter_url' => ['nullable','string'],
            'biography' => ['required','string'],
            'achievement' => ['required','string'],
            'address' => ['required','string'],
            'email' => ['required','email'],
        ];
    }
}
