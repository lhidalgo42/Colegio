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

			<div class="form-group">
				<label for="MomRut">Rut </label> <small style="padding-left: 5px;">Si No Conoce el Rut Deje el Campo Vacio</small>
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
				<div class="checkbox">
					<label>
						<input type="checkbox"> Check me out
					</label>
				</div>
		</div>
		<div class="col-sm-6">
			Hola
		</div>
	</div>
<script>
	$("input").blur(function(){this.value=this.value.toUpperCase();});
	$("#MomRut").blur(function(){verificarRut(this)});
	$("#DadRut").blur(function(){verificarRut(this)});
	$("#MomLastName1").blur(function(){

	});
	$("#DadLastName1").blur(function(){

	});

</script>
@stop
