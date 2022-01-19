<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CoinRequest extends FormRequest
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
            'code' => 'required',
            'description' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'code.required' => 'O codigo é um campo obrigatório',
            'description.required' => 'O campo descrição é obrigatório',
        ];
    }
}
