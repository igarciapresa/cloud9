<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SalonRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre'    => 'required|string|unique:salon,nombre',
            'capacidad' => 'required|numeric|gte:0',
            'ubicacion' => 'required'
        ];
    }
    
    public function messages() {
        return [
            'nombre.required'       => 'Debe introducir un nombre.',
            'nombre.unique'         => 'Ya existe un salón con este nombre.',
            'capacidad.required'    => 'Debe introducir la capacidad del salón.',
            'capacidad.gte:0'       => 'La capacidaddebe ser superior a cero.',
            'ubicacion.required'    => 'Debe introducir una ubicacion.',
        ];
    }
}
