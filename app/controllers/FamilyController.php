<?php

class FamilyController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /family
	 *
	 * @return Response
	 */
	public function index()
	{
		$families = Family::all();
		return View::make('tuition.families',compact('families'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /family/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /family
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /family/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$family = Family::find($id);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /family/{id}/edit
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
	 * PUT /family/{id}
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
	 * DELETE /family/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}