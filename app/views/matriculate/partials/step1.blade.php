@extends('...layouts.masters.master-matriculate')

@section('content')
	<div class="col-lg-12 col-xs-12 col-md-12">
		<div class="form-group">
			<label for="Family" class="col-sm-2 control-label">Familia :</label>
			<div class="col-sm-4">
				<input type="text" class="form-control disabled" id="familia" name="family" placeholder="Familia" disabled>
			</div>
			<div class="col-sm-offset-4 col-sm-2">
				ID <strong>#<?php echo "20141218"."1"; ?></strong>
			</div>
		</div>
	</div>
	<div class="col-sm-12" style="padding-top: 30px;">
		<div class="col-sm-6">
			<h2>Datos Mama</h2>
			<input type="hidden" id="MomSex" name="MomSex" value="0">
			<div class="form-group">
				<label for="MomRut">Rut </label> <small style="padding-left: 5px;">Si No Conoce el Rut Deje el Campo Vacio.</small>
				<input type="text" class="form-control" id="MomRut" name="MomRut" placeholder="ej 11.111.111.-k ">
			</div>

			<div class="form-group">
				<label for="MomName">Nombres</label>
				<input type="text" class="form-control" id="MomName" name="MomName" placeholder="Nombres">
			</div>
			<div class="form-group">
				<label for="MomLastName1">Apellido Paterno</label>
				<input type="text" class="form-control" id="MomLastName1" name="MomLastName1" placeholder="Apellido Paterno">
			</div>
			<div class="form-group">
				<label for="MomLastName2">Apellido Materno</label>
				<input type="text" class="form-control" id="MomLastName2" name="MomLastName2" placeholder="Apellido Materno">
			</div>
			<div class="form-group">
				<label for="MomPhone">Telefonos</label><small style="padding-left: 5px;">Si es más de uno usar coma.</small>
				<input type="text" class="form-control" id="MomPhone" name="MomPhone" placeholder="Telefonos">
			</div>
			<hr>
			<div class="form-group">
				<label for="MomBorn">Fecha de Nacimiento</label>
				<input type="text" class="form-control" id="MomBorn" name="MomBorn" placeholder="Fecha de Nacimiento" data-date-format="YYYY-MM-DD">
			</div>
			<div class="form-group">
				<label for="MomWork">Profesión</label>
				<input type="text" class="form-control" id="MomWork" name="MomWork" placeholder="Profesión">
			</div>
			<div class="form-group">
				<label for="MomAddress">Dirección</label>
				<input type="text" class="form-control" id="MomAddress" name="MomAddress" placeholder="Dirección">
			</div>
			<div class="form-group">
				<label for="MomComuna">Comuna</label>
				<select name="MomComuna" id="MomComuna" class="form-control">
					<option>Seleccione Comuna</option>
				</select>
			</div>
			<div class="form-group">
				<label for="MomEmail">Email</label>
				<input type="text" class="form-control" id="MomEmail" name="MomEmail" placeholder="Direccion de Correo">
			</div>
			<div class="form-group">
				<label for="MomWorkPlace">Lugar de Trabajo</label>
				<input type="text" class="form-control" id="MomWorkPlace" name="MomWorkPlace" placeholder="Lugar de Trabajo">
			</div>
			<div class="form-group">
				<label for="MomWorkAddress">Direccion de Trabajo</label>
				<input type="text" class="form-control" id="MomWorkAddress" name="MomWorkAddress" placeholder="Direccion de Trabjo">
			</div>
		</div>
		<div class="col-sm-6">
			<h2>Datos Papa</h2>
			<input type="hidden" id="DadSex" name="DadSex" value="1">
			<div class="form-group">
				<label for="DadRut">Rut </label> <small style="padding-left: 5px;">Si No Conoce el Rut Deje el Campo Vacio.</small>
				<input type="text" class="form-control" id="DadRut" name="DadRut" placeholder="ej 11.111.111.-k ">
			</div>

			<div class="form-group">
				<label for="DadName">Nombres</label>
				<input type="text" class="form-control" id="DadName" name="DadName" placeholder="Nombres">
			</div>
			<div class="form-group">
				<label for="DadLastName1">Apellido Paterno</label>
				<input type="text" class="form-control" id="DadLastName1" name="DadLastName1" placeholder="Apellido Paterno">
			</div>
			<div class="form-group">
				<label for="DadLastName2">Apellido Materno</label>
				<input type="text" class="form-control" id="DadLastName2" name="DadLastName2" placeholder="Apellido Materno">
			</div>
			<div class="form-group">
				<label for="DadPhone">Telefonos</label><small style="padding-left: 5px;">Si es más de uno usar coma.</small>
				<input type="text" class="form-control" id="DadPhone" name="DadPhone" placeholder="Telefonos">
			</div>
			<hr>
			<div class="form-group">
				<label for="DadBorn">Fecha de Nacimiento</label>
				<input type="text" class="form-control" id="DadBorn" name="DadBorn" placeholder="Fecha de Nacimiento" data-date-format="YYYY-MM-DD">
			</div>
			<div class="form-group">
				<label for="DadWork">Profesión</label>
				<input type="text" class="form-control" id="DadWork" name="DadWork" placeholder="Profesión">
			</div>
			<div class="form-group">
				<label for="DadAddress">Dirección</label>
				<input type="text" class="form-control" id="DadAddress" name="DadAddress" placeholder="Dirección">
			</div>
			<div class="form-group">
				<label for="DadComuna">Comuna</label>
				<select name="DadComuna" id="DadComuna" class="form-control">
					<option>Seleccione Comuna</option>
				</select>
			</div>
			<div class="form-group">
				<label for="DadEmail">Email</label>
				<input type="text" class="form-control" id="DadEmail" name="DadEmail" placeholder="Direccion de Correo">
			</div>
			<div class="form-group">
				<label for="DadWorkPlace">Lugar de Trabajo</label>
				<input type="text" class="form-control" id="DadWorkPlace" name="DadWorkPlace" placeholder="Lugar de Trabajo">
			</div>
			<div class="form-group">
				<label for="DadWorkAddress">Direccion de Trabajo</label>
				<input type="text" class="form-control" id="DadWorkAddress" name="DadWorkAddress" placeholder="Direccion de Trabjo">
			</div>
		</div>
	</div>
	<div class="col-sm-12" style="padding-bottom: 30px;">
		<div class="pull-right col-sm-1"><button class="btn btn-default" type="button" id="next" data-loading-text="Cargando ..." autocomplete="off">Siguente</button></div>
		<div class="pull-left col-sm-1"><button class="btn btn-default disabled">Anterior</button></div>

	</div>
<script>
	$("#MomRut").blur(function(){verificarRut(this)});
	$("#DadRut").blur(function(){verificarRut(this)});
	//TODO Completar Familia y Agregar el Apoderado Economico.
	$("#MomLastName1").blur(function(){

	});
	$("#DadLastName1").blur(function(){

	});
	$(function () {
		$('#MomBorn').datetimepicker({
			language: 'es',
			defaultDate: "1980-01-01",
			pickTime: false
		});
		$('#DadBorn').datetimepicker({
			language: 'es',
			defaultDate: "1980-01-01",
			pickTime: false
		});
	});
	$('#next').click(function () {
		var $btn = $(this).button('Cargando ...');
		// TODO Ajax para envio de datos a la session
		$btn.button('reset');
	});
</script>
@stop
