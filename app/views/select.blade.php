@extends('layouts.masters.master-index')

@section('content')

<form class="form-signin" >
    <h2 class="form-signin-heading" style="padding-top: 10px;text-align: center;">Ingresar </h2>
    <h5 class="form-signin-heading" style="text-align: center;">Seleccione como desea ingresar</h5>
@if( Auth::user()->roles_id == 1 || Auth::user()->roles_id == 3 || Auth::user()->roles_id == 4)
<a href="/matriculate/" class="btn btn-large btn-block">Matricular</a>
@endif
@if(Auth::user()->roles_id == 1 || Auth::user()->roles_id == 2 || Auth::user()->roles_id == 4)
<a href="/Contabilidad" class="btn btn-large btn-block">Contabilidad</a>
@endif
@if(Auth::user()->roles_id == 1)
<a href="/admin" class="btn btn-large btn-block">Administración</a>
@endif
</form>

@stop
@section('css')

{{ HTML::style('css/index.css') }}

@stop
