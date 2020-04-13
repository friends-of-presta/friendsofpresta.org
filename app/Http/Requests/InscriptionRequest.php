<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class InscriptionRequest extends FormRequest
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
     * Prepare the data for validation.
     *
     * @return void
     */
    protected function prepareForValidation()
    {
        //
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'nom' => ['required', 'max:255'],
            'prenom' => ['required', 'max:255'],
            'telephone' => ['required', 'regex:/^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$/i'],
            'email' => ['required', 'email'],
            'siren' => ['required', 'regex:/^[0-9]{3}[ \.\-]?[0-9]{3}[ \.\-]?[0-9]{3}$/i'],
            'societe' => ['required', 'max:255'],
            'statut' => ['required', 'in:SARL,SASU,SAS,EURL,EI,Micro,Autre'],
            'salaries' => ['required', 'in:0-20,21-50,50-'],
            'adresse' => ['required', 'max:255'],
            'cp' => ['required', 'max:255'],
            'ville' => ['required', 'max:255'],
            'commentaires' => ['required']
        ];

        return $rules;
    }

    protected function failedValidation(Validator $validator)
    {
        parent::failedValidation($validator);
    }
}
