@extends('layouts/master')

@section('content')

<form class="form-signin" >
    <h2 class="form-signin-heading" style="padding-top: 10px;text-align: center;">Ingresar </h2>
    <h5 class="form-signin-heading" style="text-align: center;">Seleccione como desea ingresar</h5>

<a href="/matriculas/options" class="btn btn-large btn-block">Matricular</a>
<a href="/Contabilidad/" class="btn btn-large btn-block">Contabilidad</a>
<a href="/admin/index" class="btn btn-large btn-block">Administración</a>
    <div id="mensaje"></div> <!-- div para mostrar mensajes de error -->
</form>



@stop

@section('css')

{{ HTML::style('css/index.css') }}

@stop

@section('js')

{{ HTML::script('http://cdn.jquerytools.org/1.2.7/full/jquery.tools.min.js') }}

{{ HTML::script('js/index.js') }}

@stop

@section('footer')

@stop
