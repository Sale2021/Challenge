<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDossierRequest extends FormRequest
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
            'tuteur' => 'string|required',
            'poids' => 'string|required',
            'taille' => 'string|required',
            'tension' => 'string|required',
            'frequence' => 'string|required',
            'temperature' => 'string|required',
            'observation' => 'string|nullable',
            'allergie' => 'string|nullable',
            'patient_id' => 'required|exists:patients,id',
        ];
    }
}
