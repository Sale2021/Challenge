<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StorePlanningRequest extends FormRequest
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
            'debut' => 'string|required',
            'fin' => 'string|required',
            'type' => 'string|required',
            'user_id' => 'required|exists:users,id',
            'patient_id' => 'required|exists:patients,id',
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'user_id' => Auth::user()->id,
        ]);
    }

    protected function failedValidation(Validator $validator)
    {
        return toastr()->error('la validation a echoué verifiez vos informations!');
    }
}
