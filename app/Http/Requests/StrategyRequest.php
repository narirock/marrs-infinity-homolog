<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StrategyRequest extends FormRequest
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
            'name'  => 'required',
            'minutes' => 'required',
            'symbol' => 'required',
            'signals' => 'required',
            'signal_types' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Digite o nome da estratégia',
            'minutes.required' => 'Digite a quantidade de minutos',
            'symbol.required' => 'Selecione o símbolo da moeda',
            'signals.required' => 'Digite a quantidade de sinais',
            'signal_types.required' => 'Selecione ao menos um tipo de sinal',
        ];
    }
}
