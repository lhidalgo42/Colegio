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
			@for($i=1;$i<=12;$i++)
				<?php if($i==1)$class="block";else $class="none"; ?>
			<div id="pagoI{{$i}}" style="display: {{$class}}">
				<h3>Cuota de Incorporacion - Pago {{$i}}</h3><hr style="margin-top: 0px;"><!-- PAGO -->
				<div class="form-group col-sm-4">
					<input type="number" class="form-control" placeholder="Numero de Boleta">
				</div>
				<div class="form-group col-sm-4 col-sm-offset-4">
					<input type="text" class="form-control dates" placeholder="Fecha de Pago" data-date-format="YYYY-MM-DD">
				</div>
				<strong>Modo de Pago</strong><hr style="margin-top: 0px;"><!-- PAGO -->
				<div class="col-sm-6">
					<div class="form-group">
						<select class="form-control">
							<option>Seleccione Banco</option>
							@foreach(Bank::all() as $bank)
								<option value="{{$bank->id}}">{{$bank->name}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<input class="form-control" type="text" placeholder="Ingrese Numero de Cheque">
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group button-pay">
						<button type="button" class="btn btn-primary col-sm-4 active">Cheque</button>
						<button type="button" class="btn btn-primary col-sm-4">Letra</button>
						<button type="button" class="btn btn-primary col-sm-4">Efectivo</button>
					</div>
					<div class="form-group" style="padding-top: 30px;">
						<input class="form-control pago" type="text" placeholder="Ingrese Monto de Pago">
					</div>
				</div>

				<strong>Detalles del Pago</strong><hr style="margin-top: 0px;"><!-- PAGO -->

				<div class="form-group col-sm-4" style="padding-top: 30px;">
					<input class="form-control" type="number" placeholder="Cuota de Incorporacion">
				</div>
				<div class="form-group col-sm-4" style="padding-top: 30px;">
					<input class="form-control disabled" type="number" placeholder="Colegiatura" value="0" disabled>
				</div>
				<div class="form-group col-sm-4" style="padding-top: 30px;">
					<input class="form-control disabled" type="number" placeholder="Materiales" value="0" disabled>
				</div>
			</div>
			@endfor
			@for($i=1;$i<=12;$i++)
				<?php $class="none"; ?>
				<div id="pagoC{{$i}}"  style="display: {{$class}}">
					<h3>Cuota de Colegiatura - Pago {{$i}}</h3><hr style="margin-top: 0px;"><!-- PAGO -->
					<div class="form-group col-sm-4">
						<input type="number" class="form-control" placeholder="Numero de Boleta">
					</div>
					<div class="form-group col-sm-4 col-sm-offset-4">
						<input type="text" class="form-control dates" placeholder="Fecha de Pago" data-date-format="YYYY-MM-DD">
					</div>
					<strong>Modo de Pago</strong><hr style="margin-top: 0px;"><!-- PAGO -->
					<div class="col-sm-6">
						<div class="form-group">
							<select class="form-control">
								<option>Seleccione Banco</option>
								@foreach(Bank::all() as $bank)
									<option value="{{$bank->id}}">{{$bank->name}}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<input class="form-control" type="text" placeholder="Ingrese Numero de Cheque">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group button-pay">
							<button type="button" class="btn btn-primary col-sm-4 active">Cheque</button>
							<button type="button" class="btn btn-primary col-sm-4">Letra</button>
							<button type="button" class="btn btn-primary col-sm-4">Efectivo</button>
						</div>
						<div class="form-group" style="padding-top: 30px;">
							<input class="form-control pago" type="text" placeholder="Ingrese Monto de Pago">
						</div>
					</div>
						<strong>Detalles del Pago</strong><hr style="margin-top: 0px;"><!-- PAGO -->

					<div class="form-group col-sm-4" style="padding-top: 30px;">
						<input class="form-control disabled" type="number" placeholder="Cuota de Incorporacion" value="0" disabled>
					</div>
					<div class="form-group col-sm-4" style="padding-top: 30px;">
						<input class="form-control" type="number" placeholder="Colegiatura">
					</div>
					<div class="form-group col-sm-4" style="padding-top: 30px;">
						<input class="form-control" type="number" placeholder="Materiales">
					</div>
				</div>
			@endfor
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
	<script>
		$(function(){
			$('.dates').datetimepicker({
				language: 'es',
				defaultDate: "Now",
				pickTime: false
			});
		})
	</script>

@stop
