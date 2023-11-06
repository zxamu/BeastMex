<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorComprasRegistroProveedor extends FormRequest
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
            'txtAP' => 'required',
            'txtAM' => 'required',
            'txtEmpresa' => 'required',
            'txtRZ' => 'required',
            'txtCalle' => 'required',
            'txtColonia' => 'required',
            'txtNumero' => 'required|number',
            'txtTel' => 'required|number|max:10',
            'txtCorreo' => 'required|email',
        ];
    }
}
