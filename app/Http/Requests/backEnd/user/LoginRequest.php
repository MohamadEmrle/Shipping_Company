<?php

namespace App\Http\Requests\backEnd\user;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'email'    => 'required|exists:users,email',
            'password' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'Enter The E-mail',
            'email.exists'   => 'The E-mail Does Not Exists',
            'email.required' => 'Enter The Password',
        ];
    }
}
