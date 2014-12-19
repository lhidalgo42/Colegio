@extends('layouts.masters.master-index')

@section('content')

    <form class="form-signin" >
        <h2 class="form-signin-heading" style="margin-top:-10px;text-align: center;">Ingresar </h2>
        <h5 class="form-signin-heading" style="text-align: center;">Seleccione como desea ingresar</h5>
        @if( Auth::user()->roles_id == 1 || Auth::user()->roles_id == 3 || Auth::user()->roles_id == 4)
            <a href="/matriculate/new" class="btn btn-large btn-block">Matricular</a>
        @endif
        @if(Auth::user()->roles_id == 1 || Auth::user()->roles_id == 3 || Auth::user()->roles_id == 4)
            <a href="/matriculate/old" class="btn btn-large btn-block">Matricular Alumno Antiguo</a>
        @endif
        @if(Auth::user()->roles_id == 1 || Auth::user()->roles_id == 3 || Auth::user()->roles_id == 4)
            <a href="/matriculate/review" class="btn btn-large btn-block">Revisar Cartolas Anteriores</a>
        @endif
            <a href="/logout" class="btn btn-large btn-block btn-danger">Salir</a>
    </form>

@stop
@section('css')

    {{ HTML::style('css/index.css') }}

@stop
