<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProveedorRequest extends FormRequest
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
			'id_proveedor' => 'required',
			'nombre' => 'required|string',
			'email' => 'required|string',
			'telefono' => 'required|string',
			'direccion' => 'required|string',
			'codigo_postal' => 'required|string',
			'tipo' => 'required|string',
        ];
    }
}
