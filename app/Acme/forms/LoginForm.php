<?php namespace Acme\Forms;

use Laracasts\Validation\FormValidator;

class LoginForm extends FormValidator {

    protected $rules = [

        'rut'    => 'required',
        'password' => 'required'
    ];
}