<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Profesorrequest extends FormRequest
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
        'nombre' => 'required|string|alpha|max:255',
        'apellido' => 'required|string|alpha|max:255',
        'cedula' => 'required|integer|numeric|max:30000000|min:4000000|unique:profesor',
        'tlf' => 'required|unique:profesor|numeric',
        'email' => 'required|email|max:255|unique:profesor',
        ];
    }
    public function messages()
    {
        return
        [
        'nombre.required' => 'Es necesario un nombre',
        'apellido.required'  => 'Es necesario un apellido',
        'cedula.required' => 'Es necesaria la cedula',
        'tlf.required'  => 'Es necesario un tlf',
        'email.required' => 'Es necesario un correo electronico',
       
        'nombre.alpha'  => 'Solo letras en el nombre',
        'apellido.alpha'  => 'Solo letras en el apellido',

        'cedula.numeric'  => 'Solo numeros en la cedula',
        'tlf.numeric'  => 'Solo numeros en el tlf',

        'cedula.unique'  => 'Esta cedula ya esta en uso',
        'tlf.unique'  => 'Este telefono ya esta en uso',
        'email.unique'  => 'Este email ya esta en uso',

        ];
    }
}
