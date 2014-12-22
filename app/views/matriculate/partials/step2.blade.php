@extends('...layouts.masters.master-matriculate')

@section('content')
	<div class="col-lg-12 col-xs-12 col-md-12" style="padding-bottom: 30px;">
		<div class="col-sm-12">
			<div class="pull-right col-sm-1"><button class="btn btn-default" type="button" id="next" data-loading-text="Cargando ..." autocomplete="off">Siguente</button></div>
			<div class="pull-left col-sm-1"><button class="btn btn-default" type="button" id="prev" data-loading-text="Cargando ..." autocomplete="off">Anterior</button></div>
		</div>
	</div>
	<div class="col-sm-9">
		<div id="body">
			<div id="alumno1">
				<h3>Alumno1</h3><hr style="margin-top: 0px;"><!-- PAGO -->
				<div class="form-group col-sm-8 col-sm-offset-4">
					<input type="text" class="form-control rut" placeholder="Rut Alumno">
				</div>
				<div class="form-group col-sm-4">
					<input type="text" class="form-control" placeholder="Nombre">
				</div>
				<div class="form-group col-sm-4">
					<input type="text" class="form-control" placeholder="Apellido Paterno">
				</div>
				<div class="form-group col-sm-4">
					<input type="text" class="form-control" placeholder="Apellido Materno">
				</div>
				<div class="form-group col-sm-4">
					<input type="text" class="form-control dates" placeholder="Fecha de Nacimiento" data-date-format="YYYY-MM-DD">
				</div>
				<div class="form-group col-sm-4">
					<select class="form-control">
						<option>Seleccione Sexo</option>
						<option value="1">Hombre</option>
						<option value="0">Mujer</option>
					</select>
				</div>
				<div class="form-group col-sm-4">
					<select class="form-control">
						<option>Seleccione Curso</option>
						@foreach(Grade::all() as $grade)
							<option value="{{$grade->id}}">{{$grade->name}}</option>
						@endforeach
					</select>
				</div>
				<strong>Modo de Pago</strong><hr style="margin-top: 0px;"><!-- PAGO -->
				<div class="form-group col-sm-6">
					<button class="btn btn-success">Cheque</button>
					<button class="btn btn-primary">Letra</button>
					<button class="btn btn-primary">Efectivo</button>
				</div>
				<div class="form-group col-sm-6">
					<select class="form-control">
						<option>Seleccione Banco</option>
						@foreach(Bank::all() as $bank)
							<option value="{{$bank->id}}">{{$bank->name}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group col-sm-6" style="padding-top: 30px;">
					<input class="form-control" type="text" placeholder="Ingrese Numero de Cheque">
				</div>
				<div class="form-group col-sm-6" style="padding-top: 30px;">
					<input class="form-control pago" type="text" placeholder="Ingrese Monto de Pago">
				</div><!-- PAGO -->
				<strong>Detalles del Pago</strong><hr style="margin-top: 0px;"><!-- PAGO -->
				<div class="form-group col-sm-4" style="padding-top: 30px;">
					<input class="form-control" type="number" placeholder="Cuota de Incorporacion">
				</div>
				<div class="form-group col-sm-4" style="padding-top: 30px;">
					<input class="form-control" type="number" placeholder="Colegiatura">
				</div>
				<div class="form-group col-sm-4" style="padding-top: 30px;">
					<input class="form-control" type="number" placeholder="Materiales">
				</div>
			</div>

		</div>
	</div>
	<div class="col-sm-3">
			<a class="list-group-item list-group-item-success">
				Alumnos Inscritos
			</a>
				<div class="list-group">
					@for($i=1;$i<6;$i++)
						@if($i==1)
							<a href="#" data-id="alumno{{$i}}" class="list-group-item active">
						@else
							<a href="#" data-id="alumno{{$i}}" class="list-group-item">
						@endif
							Alumno {{$i}}
							</a>
					@endfor
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-12 col-xs-12 col-md-12" style="padding-bottom: 30px;">
		<div class="col-sm-12">
			<div class="pull-right col-sm-1"><button class="btn btn-default" type="button" id="next" data-loading-text="Cargando ..." autocomplete="off">Siguente</button></div>
			<div class="pull-left col-sm-1"><button class="btn btn-default" type="button" id="prev" data-loading-text="Cargando ..." autocomplete="off">Anterior</button></div>
		</div>
	</div>
	<script>
		$(function(){
			$('.dates').datetimepicker({
				language: 'es',
				defaultDate: "",
				pickTime: false
			});
		})
	</script>
@stop
