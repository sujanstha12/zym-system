<?php

namespace App\Http\Requests\ClassSchedule;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreClassScheduleRequest extends FormRequest
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
           'instructor_id' => ['required',Rule::exists('instructors', 'id')],
           'ourclass_id' => ['required', Rule::exists('ourclasses', 'id')],
            'time' => ['required','string','max:255'],
            'day' => ['required','string','max:255'],
        ];
    }
}
