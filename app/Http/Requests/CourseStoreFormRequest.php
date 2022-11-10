<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseStoreFormRequest extends FormRequest
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
            'name_course'=>'required|string',
            'load_hours'=>'nullable',
            'discipline_id'=>'nullable',
        ];
    }
    public function messages()
    {
        return[
            'name_course.required'=>'O campo curso é obrigatório',
            'name_course.string'=>'O campo curso deve ser string',
        ];
    }
}
