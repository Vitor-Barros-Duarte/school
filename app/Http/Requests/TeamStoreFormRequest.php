<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamStoreFormRequest extends FormRequest
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
            'name_team'=>'required|string',

    ];
    }
    public function messages()
    {
        return[
            'name_team.required'=>'O campo nome é obrigatório',
            'name_team.string'=>'O campo nome deve ser string',
        ];
    }
}
