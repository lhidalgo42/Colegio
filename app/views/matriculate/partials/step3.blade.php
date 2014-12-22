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
			<div id="pagoI1">
				<h3>Cuota de Incorporacion - Pago 1</h3><hr style="margin-top: 0px;"><!-- PAGO -->
				<div class="form-group col-sm-4">
					<input type="number" class="form-control" placeholder="Numero de Boleta">
				</div>
				<div class="form-group col-sm-4 col-sm-offset-4">
					<input type="text" class="form-control dates" placeholder="Fecha de Pago" data-date-format="YYYY-MM-DD">
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
					<input class="form-control" type="text" placeholder="Ingrese Monto de Pago">
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
		<div class="panel-group" id="cuotas">
			<a class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#cuotas" href="#cuotaIncorporacion">
				Cuota de Incorporacion
			</a>
			<div id="cuotaIncorporacion" class="panel-collapse collapse in">
				<div class="list-group">
					@for($a=0;$a<12;$a++)
						<?php $i = $a + 1; ?>
						@if($i==1)
							<a href="#" data-id="pagoI{{$i}}" class="list-group-item active">
						@else
							<a href="#" data-id="pagoI{{$i}}" class="list-group-item">
						@endif
							Pago {{$i}}
							</a>
					@endfor
				</div>
			</div>
			<a class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#cuotas" href="#pagoCuotas">
				Pago de Cuotas
			</a>
			<div id="pagoCuotas" class="panel-collapse collapse">
				<div class="list-group">
					@for($a=0;$a<12;$a++)
						<?php $i = $a + 1; ?>
						@if($i==1)
							<a href="#" data-id="pagoC{{$i}}" class="list-group-item active">
						@else
							<a href="#" data-id="pagoC{{$i}}" class="list-group-item">
						@endif
							Pago {{$i}}
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
				defaultDate: "Today",
				pickTime: false
			}).data("DateTimePicker").show().data("DateTimePicker").hide();
		})
	</script>

@stop
