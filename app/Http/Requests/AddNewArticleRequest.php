<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddNewArticleRequest extends FormRequest
{
    public function authorize(){
        return true;
    }
    public function rules(){
        return [
            'header' => 'required|min:5|max:150',
            'content' => 'required|min:15|max:2500'
        ];
    }
    public function attributes()
    {
        return [
            'header' => 'заголовок новости'
        ];
    }
    public function messages()
    {
        return [
            'header.required' => 'Поле заголовка новости является обязательным',
            'content.required' => 'Поле текста новости является обязательным',
            'header.min' => 'Длина заголовка новости должна быть не менее 5 символов',
            'content.min' => 'Длина текста новости должна быть не менее 15 символов',
            'header.max' => 'Длина заголовка новости должна быть не более 150 символов',
            'content.max' => 'Длина текста новости должна быть не более 2500 символов',
        ];
    }
}
