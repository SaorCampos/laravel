<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeriesFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nome'=> ['required', 'min:3']
        ];
    }
    public function messages()
    {
        return [
            'nome.required' => 'O campo Nome é obrigatório',
            'nome.min' => 'O campo nome precisa ter pelo menos :min caracteres',
            'seasonQty.required' => 'O campo Nº de Temporadas é obrigatório',
            'episodesPerSeason.required' => 'O campo Episodios por Temporada é obrigatorio'
        ];
    }
}