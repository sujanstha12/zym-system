<?php

namespace App\Http\Requests\Exercise;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreExerciseRequest extends FormRequest
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
            'image' => ['required','image'],
            'title' => ['required','string','max:255'],
            'sets' => ['required','string','max:255'],
            'time' => ['required','string','max:255'],
            'ourclass_id' => ['required', Rule::exists('ourclasses', 'id')],

        ];
    }
}
