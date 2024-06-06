<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FailedJobRequest extends FormRequest
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
			'uuid' => 'required|string',
			'connection' => 'required|string',
			'queue' => 'required|string',
			'payload' => 'required',
			'exception' => 'required',
			'failed_at' => 'required',
        ];
    }
}
