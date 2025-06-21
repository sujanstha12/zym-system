<?php

namespace App\Http\Requests\Instructor;

use Illuminate\Foundation\Http\FormRequest;

class StoreInstructorRequest extends FormRequest
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
            'image' => ['required','image','mimes:png,jpg,webp'],
            'post' => ['required','string','max:255'],
            'contact_number' => ['required','numeric'],
            'facebook_url' => ['required','string'],
            'twitter_url' => ['required','string'],
            'biography' => ['required','string'],
            'achievement' => ['required','string'],
            'address' => ['required','string'],
            'email' => ['required','email'],
        ];
    }
}
