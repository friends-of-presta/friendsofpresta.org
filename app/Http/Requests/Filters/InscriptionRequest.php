<?php

namespace App\Http\Requests\Filters;

use Illuminate\Foundation\Http\FormRequest;

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
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id' => ['nullable', 'numeric', 'max:11'],
            'societe' => ['max:255'],
            'status' => ['nullable', 'in:A attribuer,création en cours,en ligne,abandonné'],
            'attribution' => ['nullable', 'exists:users,id'],
            'cp' => ['max:255']
        ];
    }
}
