<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpleadoRequest extends FormRequest
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
			'id_emp' => 'required',
			'nombre' => 'required|string',
			'apellido' => 'required|string',
			'telefono' => 'required|string',
			'cedula' => 'required|string',
			'email' => 'required|string',
			'direccion' => 'required|string',
			'saldo' => 'required',
			'id_cargo' => 'required',
			'id_user' => 'required',
        ];
    }
}
