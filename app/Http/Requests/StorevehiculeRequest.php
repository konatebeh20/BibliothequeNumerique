<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorevehiculeRequest extends FormRequest
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
            'immat'=>'required',
            'marque'=>'required',
            'famille_id'=>'required|integer'
        ];
    }

    public function messages()
    {
        return[
            'immat.required'=>'Ce champ est obligatoire',
            'marque.required'=>'Ce champ est obligatoire',
            'famille_id.required'=>'Ce champ est obligatoire',

        ];
    }
}

