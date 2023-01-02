<?php

namespace App\Http\Requests\Admin\User;

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
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string',
            'role' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле Имя обязательно для заполнения',
            'name.string' => 'Поле Имя должно быть строковым значением',
            'email.required' => 'Поле Email обязательно для заполнения',
            'email.string' => 'Поле Email должно быть строковым значением',
            'email.email' => 'Поле Email не валидно (введите в формате email@domain.ru)',
            'email.unique' => 'Пользователь с таким email уже существует',
            'password.required' => 'Поле Пароль обязательно для заполнения',
            'password.string' => 'Поле Пароль должно содержать только буквы и цифры',
        ];
    }
}
