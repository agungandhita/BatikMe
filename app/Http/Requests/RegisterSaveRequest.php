<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterSaveRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'username' => 'required|max:255',
            'email' => 'required|email:rfc,dns|unique:users',
            'password' => 'required|confirmed|min:5|max:255',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Kolom nama harus diisi.',
            'email.required' => 'Kolom email harus diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'email telah digunakan',
            'password.required' => 'Kolom password harus diisi.',
            'password.min' => 'Panjang password minimal :min karakter.',
            'telp.required' => 'Kolom nomor telepon harus diisi.',
        ];
    }
}
