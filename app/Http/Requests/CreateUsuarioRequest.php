<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUsuarioRequest extends FormRequest
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
            'nom_completo'=>'required',
            'correo'=>'required',
            'contraseña'=>'required',
            'rol'=>'required',
            'fcreacion'=>'required',
            'estado' => ''
        ];
    }

    public function attributes(): array
    {
        return [
            'nom_completo'=>'Nombre completo',
            'correo'=>'Correo',
            'contraseña'=>'Contraseña',
            'rol'=>'Rol',
            'fcreacion'=>'Fecha de creación',
            'estado'=>'Estado'
        ];
    }

    public function messages(): array
    {
        return [
            'nom_completo.required'=>'Error ingresar Nombre completo',
            'correo.required'=>'Error ingresar Correo',
            'contraseña.required'=>'Error ingresar Contraseña',
            'rol.required'=>'Error ingresar Rol',
            'fcreacion.required'=>'Error ingresar Fecha de creación',
            'estado.required'=>'Error ingresar Estado'
        ];
    }
}
