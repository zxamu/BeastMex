<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorAlmacenRegistro extends FormRequest
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
            'txtNombre' => 'required',
            'txtSerie' => 'required|regex:/^[0-9]{17}$/',
            'txtCantidad' => 'required|numeric',
            'txtFolio' => 'required|regex:/^[0-9]{7}$/',
            'txtPrecio' => 'required',


        ];
    }
}
