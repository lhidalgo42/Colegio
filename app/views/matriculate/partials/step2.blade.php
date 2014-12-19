@extends('...layouts.masters.master-matriculate')

@section('content')

	<div class="col-lg-12 col-xs-12 col-md-12">
		<div class="col-sm-12">
			<div class="pull-right col-sm-1"><button class="btn btn-default" type="button" id="next" data-loading-text="Cargando ..." autocomplete="off">Siguente</button></div>
			<div class="pull-left col-sm-1"><button class="btn btn-default" type="button" id="prev" data-loading-text="Cargando ..." autocomplete="off">Anterior</button></div>
		</div>

	</div>

	<div role="tabpanel" style="padding-top: 50px;">

		<!-- Nav tabs -->
	<div id="tabs">
		<a class="btn btn-primary col-sm-3" href="#alumno1" >Alumno 1</a>
		<a class="btn btn-default col-sm-1 pull-right" href="#" aria-controls="profile" role="tab" data-toggle="tab">Agregar</a>
	</div>
		<!-- Tab panes -->
		<div class="tab-content" id="content">
			<div role="tabpanel" class="tab-pane fade in active" id="alumno1">
				<div class="col-sm-6 col-sm-offset-3">
					{{Helpers::add("Alumno1Rut","Rut del Alumno","Si No Conoce el Rut Deje el Campo Vacio.")}}
					{{Helpers::add("Alumno1Name","Nombre")}}
					{{Helpers::add("Alumno1LastName1","Apellido Paterno")}}
					{{Helpers::add("Alumno1LastName2","Apellido Materno")}}
				</div>


			</div>
		</div>

	</div>

@stop
