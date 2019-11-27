<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CorazonRequest extends FormRequest
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
            'peso'=>'required|min:4|max:20',
            'estado'=>'required',
            'persona_id'=>'required|integer'
        ];
    }

    public function attributes()
    {
        return [
            'peso'=>'Peso del Corazon',
            'estado'=>'Estado del Corazon',
            'persona_id'=>'Identificacion de la persona'
        ];
    }

    public function messages()
    {
        return [
            'required'          =>'El :attribute es requerido',
            'integer'           =>'El :attribute es numerico',
            'min'               =>'El :attribute debe contener minimo 4 letras',
            'max'               =>'debe contener max 10 caracteres'
        ];
    }
}
