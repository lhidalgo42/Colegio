<?php

use Acme\forms\LoginForm;
use Laracasts\Validation\FormValidationException;

class SessionsController extends \BaseController {


	protected $loginForm;

	public function __construct(LoginForm $loginForm)
	{
		$this->loginForm = $loginForm;
	}

	public function create()
	{
		// Verificamos que el usuario no esté autenticado
		if (Auth::check())
		{
			return Redirect::to('/select');
		}

		return View::make('sessions.create');
	}

	public function store()
	{
		$remember = (Input::has('remember')) ? true : false;

        if(Rut::validate(Input::get('rut')) === false)

            return Redirect::back()->withInput()->with('error', 'Rut Invalido.');


		$formData = Input::only('rut', 'password');

		$this->loginForm->validate($formData);


		if ( ! Auth::attempt($formData, $remember))
		{
			return Redirect::back()->withInput()->with('error', 'Error en Usuario y/o Contraseña.');
		}
        return Redirect::to('/select');
	}

	public function destroy()
	{
		Auth::logout();
		return Redirect::to('/')->with('error', 'Gracias por su Visita.');
	}

}