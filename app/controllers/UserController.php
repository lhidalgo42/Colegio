<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    public function index()
    {
        if (Auth::check())
        {
            return View::make('select');
        }

        return View::make('/');
    }

    public function options()
    {
        if (Auth::user()->roles_id == 1 || Auth::user()->roles_id == 3 || Auth::user()->roles_id == 4)
        {
            return View::make('select');
        }

        return View::make('/');
    }

}
