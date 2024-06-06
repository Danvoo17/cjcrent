<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RentaRequest extends FormRequest
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
			'id_renta' => 'required',
			'ub_recogida' => 'required|string',
			'ub_devuelta' => 'required|string',
			'fecha_recogida' => 'required',
			'hora_recogida' => 'required',
			'fecha_devuelta' => 'required',
			'hora_devuelta' => 'required',
			'costo' => 'required',
			'estado' => 'required|string',
			'id_vehiculo' => 'required',
			'id_cliente' => 'required',
        ];
    }
}
