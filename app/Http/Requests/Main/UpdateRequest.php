<?php

namespace App\Http\Requests\Main;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name'=>'required|string',
            'surname'=>'required|string',
            'thirdname'=>'required|string',
            'company'=>'required|string',
            'phone'=>'required|integer',
            'email'=>'required|email',
            'birthday'=>'required|date',
            'avatar'=>'required|file',
        ];
    }

    public function messages()
    {
        return [
            'name.required' =>'Это поле необходимо заполнить',
            'name.string' =>'Это поле должно быть строкой',
            'surname.required' =>'Это поле необходимо заполнить',
            'surname.string' =>'Это поле должно быть строкой',
            'thirdname.required' =>'Это поле необходимо заполнить',
            'thirdname.string' =>'Это поле должно быть строкой',
            'phone.required' =>'Это поле необходимо заполнить',
            'phone.integer' =>'Это поле длжно быть в формате цифр',
            'email.required' =>'Это поле необходимо заполнить',
            'email.email' =>'Это поле должно быть формата example@exam.com',
            'birthday.required' =>'Это поле необходимо заполнить',
            'birthday.integer' =>'Это поле длжно быть в формате цифр',
            'avatar.required' =>'Это поле необходимо заполнить',
            'avatar.file' =>'Необходимо загрузить аватарку',

        ];
    }
}
