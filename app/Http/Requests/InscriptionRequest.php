<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use App\Repositories\InscriptionRepository;
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
        $rules = [];

        if (!isset($this->inscription)) {
            $rules['nom'] = ['required', 'max:255'];
            $rules['prenom'] = ['required', 'max:255'];
            $rules['telephone'] = [
                'required',
                'regex:/^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$/i'
            ];
            $rules['email'] = ['required', 'email'];
            $rules['siren'] = ['required', 'regex:/^[0-9]{3}[ \.\-]?[0-9]{3}[ \.\-]?[0-9]{3}$/i'];
            $rules['societe'] = ['required', 'max:255'];
            $rules['statut'] = ['required', 'in:SARL,SASU,SAS,EURL,EI,Micro,Autre'];
            $rules['salaries'] = ['required', 'in:0-20,21-50,50-'];
            $rules['adresse'] = ['required', 'max:255'];
            $rules['cp'] = ['required', 'max:255'];
            $rules['ville'] = ['required', 'max:255'];
            $rules['commentaires'] = ['required'];
        } else {
            $rules['status'] = ['required', Rule::in(array_keys(InscriptionRepository::getStatus()))];
            if ($this->get('status') == 'création en cours') {
                $rules['attribution'] = ['required', 'exists:users,id'];
            }
            if ($this->get('status') == 'en ligne') {
                $rules['url'] = ['required', 'url', 'max:255'];
            }

        }

        return $rules;
    }

    protected function failedValidation(Validator $validator)
    {
        parent::failedValidation($validator);
    }
}
