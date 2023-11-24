<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorGerencia extends FormRequest
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
            'txtNombre' => 'required|min:3|max:30',
            'txtCorreo' => 'required|email',
            'txtSalario' => 'required|numeric',
        ];
    }
}
