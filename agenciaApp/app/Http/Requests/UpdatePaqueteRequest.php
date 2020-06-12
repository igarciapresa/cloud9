<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePaqueteRequest extends PaqueteRequest
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
            'destino'     => 'required|string|max:255|min:5',
            'descripcion' => 'nullable|string',
            'fechainicial'=> 'required|date|after_or_equal:today',
            'fechafinal'  => 'required|date|after_or_equal:fechainicial',
            'precio'      => 'required|numeric|gte:0|lte:999999.99',
            //'imagen'      => 'nullable|mimes:jpg,gif,png,jpeg,webp'
        ];
    }
}
