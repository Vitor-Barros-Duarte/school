<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DisciplineStoreFormRequest extends FormRequest
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
        'name_discipline'=>'required|string',
        'load_hours'=>'nullable',
        'course_id'=>'nullable',
        ];
    }
    public function messages()
    {
        return[
        'name_discipline.required'=>'O campo disciplina é obrigatório',
        'name_discipline.string'=>'O campo disciplina deve ser string',
        ];
    }
}
