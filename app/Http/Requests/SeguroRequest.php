<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeguroRequest extends FormRequest
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
			'id_seguro' => 'required',
			'num_poliza' => 'required|string',
			'tipo' => 'required|string',
			'descripcion' => 'required|string',
			'fecha_inicio' => 'required',
			'fecha_fin' => 'required',
			'costo' => 'required',
			'id_aseg' => 'required',
        ];
    }
}
