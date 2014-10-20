@extends('...layouts.master-index')

@section('content')

<div class="container-fluid">
            <form class="form-signin" style="padding-top: 30px;">
                <h2 class="form-signin-heading"><center>Ingresar</center>   </h2>
                <h5 class="form-signin-heading"><center>Seleccione como desea ingresar</center>   </h5>
                <br>
                <br>
				<a href="/matriculate/index" class="btn btn-large btn-block">Matricular Alumnos Nuevos</a>
				@if(1==2)
				<a href="#" class="btn btn-large btn-block" disabled>Matricular Alumnos Antiguos</a>
				@endif
                <div id="mensaje"></div> <!-- div para mostrar mensajes de error -->
            </form>
        </div> <!-- /container -->

@stop

@section('css')

{{ HTML::style('css/index.css') }}

@stop

@section('js')

@stop

@section('footer')

@stop
