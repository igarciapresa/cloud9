<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaqueteRequest extends FormRequest
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
            'destino'     => 'required|string|max:255|min:5|unique:paquete,destino',
            'descripcion' => 'nullable|string',
            'fechainicial'=> 'required|date|after_or_equal:today',
            'fechafinal'  => 'required|date|after_or_equal:fechainicial',
            'precio'      => 'required|numeric|gte:0|lte:999999.99',
            //'imagen'      => 'nullable|mimes:jpg,gif,png,jpeg,webp'
        ];
    }
    
    public function messages() {
        return [
            'destino.required'            => 'Debe introducir un destino.',
            'destino.unique'              => 'Ya existe un viaje a este destino.',
            'fechainicial.required'       => 'Debe introducir una fecha de inicio.',
            'fechainicial.after_or_equal' => 'No se puede introducir una fecha pasada.',
            'fechafinal.after_or_equal'   => 'La fecha final debe ser posterior a la inicial.',
            'fechafinal.required'         => 'Debe introducir una fecha final.',
            'precio.gte'                  => 'El precio debe ser mayor que 0.',
            'imagen.mimes'                => 'El formato de imagen no es válido.'
        ];
    }
}
