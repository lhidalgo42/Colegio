@extends('...layouts.masters.master-matriculate')

@section('content')
<script>
	var alumno = 1;
</script>
<div class="col-lg-12 col-xs-12 col-md-12" style="padding-bottom: 30px;">
	<div class="col-sm-12">
		<div class="pull-right col-sm-1"><button class="btn btn-default" type="button" id="next" data-loading-text="Cargando ..." autocomplete="off">Siguente</button></div>
		<div class="pull-left col-sm-1"><button class="btn btn-default" type="button" id="prev" data-loading-text="Cargando ..." autocomplete="off">Anterior</button></div>
	</div>
</div>
	<div role="tabpanel" style="padding-top: 50px;">

		<!-- Nav tabs -->
	<div id="tabs">
		<span><a class="btn btn-success col-sm-1 pull-right" href="#" aria-controls="profile" role="tab" data-toggle="tab" id="add">Agregar</a></span>
		<a class="btn btn-primary col-sm-3 active" href="#alumno1" data-id="1">Alumno 1</a>
	</div>
		<!-- Tab panes -->
		<div class="tab-content" id="content">
			<div role="tabpanel" class="tab-pane fade in active" id="alumno1">
				<div class="col-sm-6 col-sm-offset-3">
					{{Helpers::add("Alumno1Rut","Rut del Alumno","Si No Conoce el Rut Deje el Campo Vacio.")}}
				</div>
				<div class="col-sm-4">
					{{Helpers::add("Alumno1Name","Nombre")}}
				</div>
				<div class="col-sm-4">
					{{Helpers::add("Alumno1LastName1","Apellido Paterno")}}
				</div>
				<div class="col-sm-4">
					{{Helpers::add("Alumno1LastName2","Apellido Materno")}}
				</div>
			</div>
		</div>

	</div>
<script>
	$("#add").click(function(){
		alumno = alumno+1;
		tabs = $("#tabs");
		content = $("#content");
		tabs.append('<a class="btn btn-primary col-sm-3" href="#alumno'+alumno+'" data-id="'+alumno+'" >Alumno '+alumno+'</a>')
		$.ajax({
			url: "/ajax/addStudent",
			type: "post",
			data: {
				id: alumno
			},
			success: function( data ) {
				content.append(data);
			}
		});
		$("input").blur(function(){this.value=this.value.toUpperCase();});
		tabs.children("a").click(function(){
			content.children('div.active').removeClass('active').removeClass('in');
			tabs.children(".active").removeClass('active');
			$(this).addClass("active");
			var id =$(this).attr("href");
			id = id.slice(1);
			$("#"+id).addClass("in").addClass("active");
			$("input").blur(function(){this.value=this.value.toUpperCase();});
		});

	});
</script>
@stop
