<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
            'phone' => ['required', 'string', 'max:255'],
            'jobPhone' => ['required', 'string', 'max:255'],
            'jobAddress' => ['required', 'string', 'max:255'],
            'job' => ['required', 'string', 'max:255'],
            'currentAddress' => ['required', 'string', 'max:255'],
            'education' => ['required', 'string', 'max:255'],
            'nationality' => ['required', 'string', 'max:255'],
            'race' => ['required', 'string', 'max:255'],
            'maritalStatus' => ['required', 'string', 'max:255'],
            'icNumber' => ['required', 'string', 'max:255'],
        ];
    }
}
