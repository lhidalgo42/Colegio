@extends('...layouts.master-index')

@section('content')

{{ Form::open(array('url' => '/login','id' => 'usuario' , 'class' => 'form-signin')) }}
    <fieldset style="padding-top: 75px;">
    {{ Session::get('mensaje_error') }}
        <center>{{ Form::text('rut', Input::old('rut'), array('placeholder' => 'Rut','id' => 'rut','style' =>'text-align: center;','maxlength' => 15)) }}</center>
        <center>{{ Form::password('password',array('placeholder' => 'Contraseña','onfocus' => 'verificarRut(rut)' ,'id' => 'pass' ,'name' => 'pass' ,'style' => 'text-align: center;')) }}</center>
        <label class="checkbox" style="padding-left: 60px;">
            {{ Form::checkbox('remember', true) }} Recordarme
        </label>
        <center><button class="btn btn-large" disabled="disabled" id="ingresar" type="submit" style="text-align: center;"><strong>Ingresar</strong></button></center>
        <p><span id="mensaje" class="alert-danger"></span></p>
    </fieldset>
{{ Form::close() }}
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
