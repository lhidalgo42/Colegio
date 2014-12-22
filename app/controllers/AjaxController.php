<?php

class AjaxController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function MatriculateStudents()
	{
				$id = Input::get('id');

		echo '<div role="tabpanel" class="tab-pane fade" id="alumno'.$id.'">';
		echo '<div class="col-sm-12"><button class="btn btn-danger">Eliminar Alumno '.$id.'<i class="fa fa-times pull-right"></i></button></div>';
			echo '<div class="col-sm-6 col-sm-offset-3">';
				echo Helpers::add("Alumno".$id."Rut","Rut del Alumno","Si No Conoce el Rut Deje el Campo Vacio.");
			echo '</div>';
			echo '<div class="col-sm-4">';
				echo Helpers::add("Alumno".$id."Name","Nombre");
			echo '</div>';
			echo '<div class="col-sm-4">';
				echo Helpers::add("Alumno".$id."LastName1","Apellido Paterno");
			echo '</div>';
			echo '<div class="col-sm-4">';
				echo Helpers::add("Alumno".$id."LastName2","Apellido Materno");
			echo '</div>';
		echo '</div>';
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
