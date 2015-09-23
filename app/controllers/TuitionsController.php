<?php

class TuitionsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /tuitions
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /tuitions/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$grades = Grade::lists('name','id');
		$banks = Bank::lists('name','id');
		return View::make('tuition.new',compact('grades','banks'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /tuitions
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /tuitions/{id}
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
	 * GET /tuitions/{id}/edit
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
	 * PUT /tuitions/{id}
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
	 * DELETE /tuitions/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}