<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTask extends FormRequest
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
            'name' => 'required|min:5|max:100',
            'description' => 'required|min:20',
            'priority' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'El nombre es obligatorio',
            // 'name.min' => 'El nombre de la tarea es muy pequeño',
            // 'description.required' => 'La descripción es obligatoria',
            // 'priority.required' => 'Debes elegir una prioridad'
        ];
    }

    public function attributes(): array
    {
        return [
            'priority' => 'Prioridad'
        ];
    }
}
