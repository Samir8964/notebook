<?php

namespace App\Http\Requests\Main;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'phone'=>'required|string',
            'email'=>'required|email',
            'birthday'=>'required|date',
            'avatar'=>'file',
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
            'company.required' =>'Это поле необходимо заполнить',
            'company.string' =>'Это поле должно быть строкой',
            'phone.required' =>'Это поле необходимо заполнить',
            'phone.string' =>'Это поле длжно быть в формате цифр',
            'email.required' =>'Это поле необходимо заполнить',
            'email.email' =>'Это поле должно быть формата example@exam.com',
            'birthday.required' =>'Это поле необходимо заполнить',
            'birthday.integer' =>'Это поле длжно быть в формате цифр',
            'avatar.file' =>'Это поле необходимо заполнить',

        ];
    }
}
