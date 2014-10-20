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
            return View::make('matriculate.new');
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