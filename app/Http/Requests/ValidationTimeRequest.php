<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidationTimeRequest extends FormRequest
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
            'minutes' => 'required',
            'description' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'minutes.required' => 'Digite a quantidade de minutos',
            'description.required' => 'A Descrição é obrigatória'
        ];
    }
}
