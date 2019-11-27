<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
            'nombres'=>'required|alpha|min:4|max:20|alfabeticos_te',
            'apellidos'=>'required|alpha|min:4|max:20|alfabeticos_te',
            'telefono'=>'required|integer'
        ];
    }

    public function attributes()
    {
        return [
            'nombres'=>'Nombre del Cliente',
            'apellidos'=>'Apellido del Cliente',
            'telefono'=>'Telefono del Cliente'
        ];
    }

    public function messages()
    {
        return [
            'required'      =>'El :attribute es requerido',
            'alpha'         =>'El :attribute solo puede contener letras',
            'integer'       =>'El :attribute solo puede contener numeros',
            'min'           =>'El :attribute debe contener minimo 4 letras',
            'max'           =>'debe contener max 10 caracteres'
        ];
    }

}
