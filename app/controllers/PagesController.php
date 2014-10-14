<?php

class PagesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        if (Auth::check())
        {
            return View::make('pages.select');
        }

        return View::make('pages.index');
	}
    public function select()
    {
        if (Auth::check())
        {
            return View::make('pages.select');
        }

        return View::make('pages.index');
    }



}
