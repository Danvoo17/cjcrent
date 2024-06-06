<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FacturaRequest extends FormRequest
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
			'cod_factura' => 'required',
			'metodo_pago' => 'required|string',
			'fecha' => 'required',
			'descripcion' => 'required|string',
			'itbis' => 'required',
			'descuentos' => 'required',
			'monto_total' => 'required',
			'id_renta' => 'required',
        ];
    }
}
