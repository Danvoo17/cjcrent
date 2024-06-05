<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehiculoRequest extends FormRequest
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
			'id_vehiculo' => 'required',
			'matricula' => 'required|string',
			'precio' => 'required',
			'año' => 'required|string',
			'color' => 'required|string',
			'estado' => 'required|string',
			'pasajeros' => 'required|string',
			'puertas' => 'required|string',
			'maletas' => 'required|string',
			'tipo' => 'required|string',
			'traccion' => 'required|string',
			'transmision' => 'required|string',
			'motor' => 'required|string',
			'opciones' => 'string',
			'id_modelo' => 'required',
			'id_seguro' => 'required',
        ];
    }
}
