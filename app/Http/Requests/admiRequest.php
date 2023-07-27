<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class admiRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
        'nom'=>'required|min: 3',
        'prenom'=>'required|min: 3',
        'email'=>'required|email|unique:administrateurs,email',
        'password'=>'required',
        ];
    }

    public function messages(){
        return [
            'nom.required'=>'le champ nom est requis',
            'prenom.required'=>'le champ prenom est requis',
            'email.required'=>'le champ email est requis',
            'password.required'=>'le champ mot de passe est requis',
        ];
    }
}
