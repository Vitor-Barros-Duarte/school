<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeacherStoreFormRequest extends FormRequest
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
            'name_teacher'=>'required|string',
            'sex'=>'required|in:M,F,I',
            'birth_date'=> 'required|date',
            'phone'=> 'required|string',
            'address'=> 'required|string',
            'district'=> 'required|string',
            'state'=> 'required|string',
            'city'=> 'required|string',
            'cep'=> 'required|string'
        ];
    }

    public function messages()
    {
        return[
            'name_teacher.required'=>'O campo nome é obrigatório',
            'name_teacher.string'=>'O campo nome deve ser string',
            'sex.required'=>'O campo sexo é obrigatório',
            'sex.in:M,F,I'=>'O campo sexo deve ser selecionado',
            'birth_date.required'=> 'O campo data de nascimento e obrigatório',
            'birth_date.date'=>'O campo data de nascimento deve ser uma data',
            'phone.required'=>'O campo telefone é obrigatório',
            'phone.string'=>'O campo telefone deve ser um string',
            'address.required'=>'O campo endereco é obrigatório',
            'address.string'=>'O campo endereco deve ser um string',
            'district.required'=>'O campo bairro é obrigatório',
            'district.string'=>'O campo bairro é deve ser um string',
            'state.required'=>'O campo estado é obrigatório',
            'state.string'=>'O campo estado é deve ser um string',
            'city.required'=>'O campo cidade é obrigatório',
            'city.string'=>'O campo cidade é deve ser um string',
            'cep.required'=>'O campo cep é obrigatório',
            'cep.string'=>'O campo cep é deve ser um string',

        ];
    }
}
