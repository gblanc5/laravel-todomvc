<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskStoreRequest extends FormRequest
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
            //
            'name' => 'required|max:255|min:5'
        ];
    }
    
    public function messages()
    {
        // surcharger les message par défault
        return [
            'name.required' => 'A name is required.',
            'name.min' => 'Le champ name demande un minimum de 5 caractères.'
        ];
    }
}
