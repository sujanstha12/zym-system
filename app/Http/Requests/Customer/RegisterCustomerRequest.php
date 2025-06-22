<?php

namespace App\Http\Requests\Customer;

use App\Models\Customer;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class RegisterCustomerRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . Customer::class],
            'password' => [
                'required',
                'confirmed',
                Password::min(7)
                    ->mixedCase()   // At least one uppercase and one lowercase letter
                    ->letters()     // Alphabetic characters
                    ->numbers()     // At least one number
                    ->symbols()     // At least one special character
            ],
            'image' => ['required', 'image'],
        ];
    }

    public function messages(): array
{
    return [
        'password.required' => 'Password is required.',
        'password.confirmed' => 'Password confirmation does not match.',
        'password.min' => 'Password must be at least 7 characters.',
    ];
}

}
