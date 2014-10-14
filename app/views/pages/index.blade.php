@extends('layouts/master')

@section('content')

{{ Form::open(array('url' => 'javascript:enviar()', 'method' => 'post' ,  'id' => 'usuario' , 'class' => 'form-signin')) }}
    <fieldset style="padding-top: 75px;">



            <center><input type="text" placeholder="Rut" id="rut" maxlength="15"  name="rut" style="text-align: center;"></center>
            <center><input type="password" placeholder="Contraseña" onfocus="verificarRut(rut)" id="pass" name="pass" style="text-align: center;"></center>


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
