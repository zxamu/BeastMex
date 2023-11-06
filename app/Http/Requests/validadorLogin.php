<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorLogin extends FormRequest
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
            //Reglas de validacion para el login
            'txtCorreo' => 'required|email',
            'txtContra' => 'required|max:8',
            //Reglas de validacion para buscar productos
            'txtNombreP' => 'required',
        ];
    }
}
