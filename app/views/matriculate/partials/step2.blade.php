@extends('...layouts.masters.master-matriculate')

@section('content')
	<div class="col-lg-12 col-xs-12 col-md-12" style="padding-bottom: 20px;padding-top: 20px;">
		<div class="col-sm-12">
			<div class="pull-right col-sm-1"><button class="btn btn-default" type="button" id="next" data-loading-text="Cargando ..." autocomplete="off">Siguente</button></div>
			<div class="pull-left col-sm-1"><button class="btn btn-default" type="button" id="prev" data-loading-text="Cargando ..." autocomplete="off">Anterior</button></div>
		</div>
	</div>
	<div class="col-sm-9">
		<div id="body">
			@for($i=1;$i<=5;$i++)
			<?php if($i==1)$display="block";else $display="none"; ?>
			<div id="alumno{{$i}}" style="display: {{$display}}">
				<h3>Alumno {{$i}}</h3><hr style="margin-top: 0px;"><!-- PAGO -->
				<div class="form-group col-sm-4">
					<input type="text" class="form-control rut" placeholder="Rut Alumno">
				</div>
				<div class="clearfix"></div>
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
				<strong>Pago de Clinica</strong><hr style="margin-top: 0px;">
				<div class="col-sm-6">
					<div class="form-group">
						<select class="form-control">
							<option>Seleccione Clinica</option>
							@foreach(Clinic::all() as $clinic)
								<option value="{{$clinic->id}}">{{$clinic->name}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<select class="form-control">
							<option>Seleccione Banco</option>
							@foreach(Bank::all() as $bank)
								<option value="{{$bank->id}}">{{$bank->name}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group" >
						<input class="form-control" type="text" placeholder="Ingrese Numero de Cheque">
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group button-pay">
						<button type="button" data-id="1" class="btn btn-primary col-sm-4 active">Cheque</button>
						<button type="button" data-id="2" class="btn btn-primary col-sm-4">Letra</button>
						<button type="button" data-id="3" class="btn btn-primary col-sm-4">Efectivo</button>
					</div>
					<div class="form-group" style="padding-top: 30px;">
						<input class="form-control pago" type="text" placeholder="Ingrese Monto de Pago">
					</div>
					<div class="form-group">
						<input class="form-control pago" type="text" placeholder="Ingrese Numero de Vale">
					</div>
				</div>
				<div class="clearfix"></div>
				<strong>Pago de Matricula</strong><hr style="margin-top: 0px;">
				<div class="col-sm-6">
					<div class="form-group">
						<select class="form-control">
							<option>Seleccione Banco</option>
							@foreach(Bank::all() as $bank)
								<option value="{{$bank->id}}">{{$bank->name}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group col-sm-6">
						<input class="form-control" type="text" placeholder="Numero de Cheque">
					</div>
					<div class="form-group col-sm-6">
						<input class="form-control" type="text" placeholder="Numero de Boleta">
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group button-pay">
						<button type="button" data-id="1" class="btn btn-primary col-sm-4 active">Cheque</button>
						<button type="button" data-id="2" class="btn btn-primary col-sm-4">Letra</button>
						<button type="button" data-id="3" class="btn btn-primary col-sm-4">Efectivo</button>
					</div>
					<div class="form-group" style="padding-top: 30px;">
						<input class="form-control pago" type="text" placeholder="Ingrese Monto de Pago">
					</div>
				</div>

			</div>
			@endfor
		</div>
	</div>
	<div class="col-sm-3" style="padding-top: 60px;">
			<a class="list-group-item list-group-item-success">
				Alumnos Inscritos
			</a>
				<div class="list-group" id="list">
					@for($i=1;$i<6;$i++)
						<?php if($i==1)$active="active";else $active=""; ?>
						<a href="#" data-id="alumno{{$i}}" class="list-group-item {{$active}}">Alumno {{$i}}</a>
					@endfor
				</div>
	</div>
	<script>
		$("#list").children().click(function(){
			var before = $(this).parent().children(".active");
			var after = $(this);
			before.removeClass("active");
			after.addClass("active");
			var itemBefore = before.attr("data-id");
			var itemAfter = after.attr("data-id");
			$("#"+itemBefore).css( "display", "none" );
			$("#"+itemAfter).css( "display", "block" );
		});
		$(function(){
			$('.dates').datetimepicker({
				language: 'es',
				defaultDate: "",
				pickTime: false
			});
		});
		$('#next').click(function () {
			var $btn = $(this).button('Cargando ...');
			var data = new Array();
			for(var i =1 ; i<=5;i++)
			{
				var base = $("#alumno"+i);
				if($(base.children()[4]).children("input").val() != "") {
					var rut = $(base.children()[2]).children("input").val();
					var name = $(base.children()[4]).children("input").val();
					var lastName1 = $(base.children()[5]).children("input").val();
					var lastName2 = $(base.children()[6]).children("input").val();
					var born = $(base.children()[7]).children("input").val();
					var sex = $(base.children()[8]).children().val();
					var grade = $(base.children()[9]).children().val();
					var clinic = $($(base.children()[12]).children()[0]).children().val();
					var clinic_bank = $($(base.children()[12]).children()[1]).children().val();
					var clinic_bank_number = $($(base.children()[12]).children()[2]).children().val();
					var clinic_payment_type = $($(base.children()[13]).children()[0]).children(".active").attr("data-id");
					var clinic_pay_mount = $($(base.children()[13]).children()[1]).children().val();
					var clinic_vale_number = $($(base.children()[13]).children()[2]).children().val();
					var matriculate_bank = $($(base.children()[17]).children()[0]).children().val();
					var matriculate_bank_number = $($(base.children()[17]).children()[1]).children().val();
					var matriculate_boleta = $($(base.children()[17]).children()[2]).children().val();
					var matriculate_paymeny_type = $($(base.children()[18]).children()[0]).children(".active").attr("data-id");
					var matriculate_pay_mount = $($(base.children()[18]).children()[1]).children().val();
					data.push({
							rut:rut,
							name:name,
							lastName1:lastName1,
							lastName2:lastName2,
							born:born,
							sex:sex,
							grade:grade,
							clinic:clinic,
							clinic_bank:clinic_bank,
							clinic_bank_number:clinic_bank_number,
							clinic_payment_type:clinic_payment_type,
							clinic_pay_mount:clinic_pay_mount,
							clinic_vale_number:clinic_vale_number,
							matriculate_bank:matriculate_bank,
							matriculate_bank_number:matriculate_bank_number,
							matriculate_boleta:matriculate_boleta,
							matriculate_payment_type:matriculate_paymeny_type,
							matriculate_pay_mount:matriculate_pay_mount
					});
				}

			}
			console.log(data);
			$.ajax({
				url: "/ajax/step/3",
				data:{'data':data},
				type:"post",
				success: function( data ) {
					window.location.href="/matriculate/new";
				}
			});
			$btn.button('reset');
		});
	</script>
	<script>

	</script>
@stop
