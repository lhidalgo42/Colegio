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
		$family = new Family();
		$family->name = Input::get('family');
		$family->users_id = Auth::user()->id;
		$family->save();
		$mother = new Parents();
		$mother->rut = Input::get('motherRUT');
		$mother->name = Input::get('motherName');
		$mother->lastname = Input::get('motherLastname');
		$mother->sex = 0;
		$mother->lastname2 = Input::get('motherLastname2');
		$mother->email = Input::get('motherMail');
		$mother->families_id = $family->id;
		$mother->save();
		$father = new Parents();
		$father->rut = Input::get('fatherRUT');
		$father->name = Input::get('fatherName');
		$father->lastname = Input::get('fatherLastname');
		$father->sex = 1;
		$father->lastname2 = Input::get('fatherLastname2');
		$father->email = Input::get('fatherMail');
		$father->families_id = $family->id;
		$father->save();
        foreach(range(1,4) as $number){
            if(Input::get('alumno'.$number.'Name') != '') {
                $children = new Children();
                $children->rut = Input::get('alumno'.$number.'RUT');
                $children->name = Input::get('alumno'.$number.'Name');
                $children->lastname = Input::get('alumno'.$number.'Lastname');
                $children->lastname2 = Input::get('alumno'.$number.'Lastname2');
                $children->grant = Input::get('alumno'.$number.'Grant');
                $children->grades_id = Input::get('alumno'.$number.'Grade');
                $children->families_id = $family->id;
                $children->save();
            }
        }
        return Redirect::to('/families');

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