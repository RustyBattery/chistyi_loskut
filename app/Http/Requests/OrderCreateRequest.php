<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderCreateRequest extends FormRequest
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
            'name' => 'required|string',
            'phone' => 'required|numeric|digits:11',
            'email' => 'required|email',
            'comment' => 'nullable|string',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Обязательно для заполнения',
            'phone.required' => 'Обязательно для заполнения',
            'email.required' => 'Обязательно для заполнения',
            'phone.numeric' => 'Некорректный номер телефона',
            'phone.digits' => 'Некорректный номер телефона',
            'email.email' => 'Некорректный email',
        ];
    }
}
