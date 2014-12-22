@extends('...layouts.masters.master-matriculate')

@section('content')

	<div class="col-sm-9">
		<div id="body">

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

@stop
