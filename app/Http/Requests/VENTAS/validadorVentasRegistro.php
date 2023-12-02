<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class validadorVentasRegistro extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'txtFecha' => 'required|date',
            'txtNombre' => 'required|string',
            'txtAP' => 'required|string',
            'txtAM' => 'required|string',
            'txtNombreProducto' => 'required',
            'txtMarca' => 'required',
            'txtCantidad' => 'required|number',
            'txtPrecio' => 'required|number',
            'txtTotalcompra' => 'required|number',
        ];
    }
}
