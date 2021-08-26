<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'nom'=>'required',
            'email'=>'required|min:7',
            'password'=>'required|min:7|confirmed',
        ];
    }
    public function messages()
    {
        return [
          'nom.required'=>'Nom Est Obligatoire',
          'email.required'=>'Email Est Obligatoire',
          'password.required'=>'Le Mot De Pass Est Obligatoire',
          'password.min'=>'Entrer Au Moins 7 caractère',
        ];
    }
}
