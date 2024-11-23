<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFamilleRequest extends FormRequest
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
            'nom'=>'required',
            'user_id'=>'required|integer'
        ];
    }

    public function messages()
    {
        return[
            'nom.required'=>'Ce champ est obligatoire',
            'user_id.required'=>'Ce champ est obligatoire',

        ];
    }
}
