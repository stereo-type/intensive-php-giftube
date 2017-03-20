<?php
namespace GifTube\forms;

class SignupForm extends BaseForm {

    protected $name = 'signup';

    protected $fields = ['email', 'password', 'name', 'avatar'];
    protected $labels = [
        'email' => 'E-mail', 'password' => 'Пароль', 'name' => 'Имя', 'avatar' => 'Аватар'
    ];
    protected $rules = [
        ['required', ['email', 'password', 'name']],
        ['email', ['email']],
        ['unique', 'email'],
        ['image', 'avatar']
    ];
}