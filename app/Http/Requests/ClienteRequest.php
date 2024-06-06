<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
            'id_cliente' => ['required', 'string'],
            'nombre' => ['required', 'string', 'max:255'],
            'apellido' => ['required', 'string', 'max:255'],
            'fecha_nac' => ['required', 'date'],
            'telefono' => ['required', 'string', 'max:255'],
            'cedula' => ['required', 'string', 'max:255'],
            'licencia' => ['required', 'string', 'max:255'],
            'id_user' => ['required', 'integer'],
        ];
    }
}
