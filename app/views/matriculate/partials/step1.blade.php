@extends('...layouts.masters.master-matriculate')

@section('content')
	<div class="col-lg-12 col-xs-12 col-md-12" style="padding-bottom: 30px;">
		<div class="col-sm-12">
			<div class="pull-right col-sm-1"><button class="btn btn-default" type="button" id="next" data-loading-text="Cargando ..." autocomplete="off">Siguente</button></div>
			<div class="pull-left col-sm-1"><button class="btn btn-default disabled" type="button" id="prev" data-loading-text="Cargando ..." autocomplete="off">Anterior</button></div>
		</div>
	</div>
	<div class="col-lg-12 col-xs-12 col-md-12">
		<div class="form-group">
			<label for="Family" class="col-sm-2 control-label">Familia :</label>
			<div class="col-sm-4">
				<input type="text" class="form-control disabled" id="family" name="family" placeholder="Familia" disabled>
			</div>
			<div class="col-sm-4">
				<select class="form-control" id="AEconomico" name="AEconomico" required="">
					<option value="1">Seleccione Apoderado Economico</option>
					<option value="0">Mama</option>
					<option value="1">Papa</option>
				</select>
			</div>
		</div>
	</div>
	<div class="col-sm-12" style="padding-top: 30px;">
		<div class="col-sm-6">
			<h2>Datos Mama</h2>
			<div class="form-group">
				<label for="MomRut">Rut </label> <small style="padding-left: 5px;">Si No Conoce el Rut Deje el Campo Vacio.</small>
				<input type="text" class="form-control rut" id="MomRut" name="MomRut" placeholder="ej 11.111.111.-k ">
			</div>

			<div class="form-group">
				<input type="text" class="form-control" id="MomName" name="MomName" placeholder="Nombres">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" id="MomLastName1" name="MomLastName1" placeholder="Apellido Paterno">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" id="MomLastName2" name="MomLastName2" placeholder="Apellido Materno">
			</div>
			<div class="form-group">
				<small style="padding-left: 5px;">Si es más de uno usar coma.</small>
				<input type="text" class="form-control" id="MomPhone" name="MomPhone" placeholder="Telefonos">
			</div>
			<div class="form-group">
				<input type="text" class="form-control dates" id="MomBorn" name="MomBorn" placeholder="Fecha de Nacimiento" data-date-format="YYYY-MM-DD">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" id="MomWork" name="MomWork" placeholder="Profesión">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" id="MomAddress" name="MomAddress" placeholder="Dirección">
			</div>
			<div class="form-group">
				<select name="MomComuna" id="MomComuna" class="form-control">
					<option>Seleccione Comuna</option>
					<option value="1">Peñalolen</option>
				</select>
			</div>
			<div class="form-group">
				<input type="text" class="form-control" id="MomEmail" name="MomEmail" placeholder="Direccion de Correo">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" id="MomWorkPlace" name="MomWorkPlace" placeholder="Lugar de Trabajo">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" id="MomWorkAddress" name="MomWorkAddress" placeholder="Direccion de Trabjo">
			</div>
		</div>
		<div class="col-sm-6">
			<h2>Datos Papa</h2>
			<div class="form-group">
				<label for="DadRut">Rut </label> <small style="padding-left: 5px;">Si No Conoce el Rut Deje el Campo Vacio.</small>
				<input type="text" class="form-control rut" id="DadRut" name="DadRut" placeholder="ej 11.111.111.-k ">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" id="DadName" name="DadName" placeholder="Nombres">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" id="DadLastName1" name="DadLastName1" placeholder="Apellido Paterno">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" id="DadLastName2" name="DadLastName2" placeholder="Apellido Materno">
			</div>
			<div class="form-group">
				<small style="padding-left: 5px;">Si es más de uno usar coma.</small>
				<input type="text" class="form-control" id="DadPhone" name="DadPhone" placeholder="Telefonos">
			</div>
			<div class="form-group">
				<input type="text" class="form-control dates" id="DadBorn" name="DadBorn" placeholder="Fecha de Nacimiento" data-date-format="YYYY-MM-DD">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" id="DadWork" name="DadWork" placeholder="Profesión">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" id="DadAddress" name="DadAddress" placeholder="Dirección">
			</div>
			<div class="form-group">
				<select name="DadComuna" id="DadComuna" class="form-control">
					<option>Seleccione Comuna</option>
					<option value="1">Peñalolen</option>
				</select>
			</div>
			<div class="form-group">
				<input type="text" class="form-control" id="DadEmail" name="DadEmail" placeholder="Direccion de Correo">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" id="DadWorkPlace" name="DadWorkPlace" placeholder="Lugar de Trabajo">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" id="DadWorkAddress" name="DadWorkAddress" placeholder="Direccion de Trabjo">
			</div>
		</div>
	</div>
<script>

	//TODO Completar Familia y Agregar el Apoderado Economico.
	$("#MomLastName1").blur(function(){
		this.value=this.value.toUpperCase();
		$("#family").val($("#DadLastName1").val()+" "+$(this).val())
	});
	$("#DadLastName1").blur(function(){
		this.value=this.value.toUpperCase();
		$("#family").val($(this).val()+" "+$("#MomLastName1").val())
	});
	$(function () {
		$('.dates').datetimepicker({
			language: 'es',
			defaultDate: "1980-01-01",
			pickTime: false
		});
	});
	$('#next').click(function () {
		var $btn = $(this).button('Cargando ...');
		var data = {
						familia: $("#family").val(),
						AEconomico:$("#AEconomico").val(),
						mom:{
							rut:$("#MomRut").val(),
							name:$("#MomName").val(),
							lastname1: $("#MomLastName1").val(),
							lastname2: $("#MomLastName2").val(),
							sex:0,
							phone:$("#MomPhone").val(),
							born:$("#MomBorn").val(),
							work:$("#MomWork").val(),
							address:$("#MomAddress").val(),
							comune:$("#MomComuna").val(),
							email:$("#MomEmail").val(),
							workPlace:$("#MomWorkPlace").val(),
							workAddress:$("#MomWorkAddress").val()
						},
						dad:{
							rut:$("#DadRut").val(),
							name:$("#DadName").val(),
							lastname1: $("#DadLastName1").val(),
							lastname2: $("#DadLastName2").val(),
							sex:1,
							phone:$("#DadPhone").val(),
							born:$("#DadBorn").val(),
							work:$("#DadWork").val(),
							address:$("#DadAddress").val(),
							comune:$("#DadComuna").val(),
							email:$("#DadEmail").val(),
							workPlace:$("#DadWorkPlace").val(),
							workAddress:$("#DadWorkAddress").val()
						}
					};
		$.ajax({
			url: "/ajax/step/2",
			data:{'data':data},
			type:"post",
			success: function( ) {
				window.location.href="/matriculate/new";
			}
		});
		$btn.button('reset');
	});
</script>
@stop
