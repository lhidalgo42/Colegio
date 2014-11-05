<?php

class MatriculateController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */



	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        if (Auth::user()->roles_id == 1 || Auth::user()->roles_id == 3 || Auth::user()->roles_id == 4)
        {
            return View::make('matriculate.index');
        }

        return View::make('/');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function create()
	{
        if (Auth::user()->roles_id == 1 || Auth::user()->roles_id == 3 || Auth::user()->roles_id == 4)
        {
            dd($_POST);// Guardamos en un arreglo los datos del usuario.
            $userdata = array(
                'rut' => Input::get('rut'),
                'password'=> Input::get('pass')
            );
            // Validamos los datos y además mandamos como un segundo parámetro la opción de recordar el usuario.
            if(Auth::attempt($userdata, Input::get('remember', 0)))
            {
                // De ser datos válidos nos mandara a la bienvenida
                return Redirect::to('/select');
            }
            // En caso de que la autenticación haya fallado manda un mensaje al formulario de login y también regresamos los valores enviados con withInput().
            return Redirect::to('/')
                ->with('mensaje_error', 'Tus datos son incorrectos')
                ->withInput();
        }

        return View::make('/');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
