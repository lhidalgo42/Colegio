@extends('...layouts.masters.master-matriculate')

@section('content')

{{ Form::open(array('url' => '/matriculate/index','role' => 'form')) }}
    {{ Session::get('mensaje_error') }}
        <center><table class="table table-responsive table-bordered" style="width: 60%">
            <tr>
                <td>
                    <div class="form-group">
                       {{ Form::text('family', Input::old('family'), array('disable' => 'disable','class' => 'form-control disabled','placeholder' => 'NOMBRE DE LA FAMILIA','disabled' => 'disabled')) }}
                    </div>
                </td>
                <td style="text-align: center;">
                <div class="btn-group" data-toggle="buttons">
                  <label class="btn btn-default disabled"> Seleccione Apoderado Economico </label>
                  <label class="btn btn-default">
                    {{ Form::radio('madreEconomica', Input::old('apoderadoEconomico'), array( 'value' => '1')) }} MADRE
                  </label>
                  <label class="btn btn-default active">
                   {{ Form::radio('padreEconomico', Input::old('apoderadoEconomico'), array('value' => '1')) }} PADRE
                  </label>
                </div>
                </td>
            </tr>
        </table></center>
        <hr>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li class="active"><a href="#padre" role="tab" data-toggle="tab">Padre</a></li>
          <li><a href="#madre" role="tab" data-toggle="tab">Madre</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content table-bordered">
          <div class="tab-pane active fade" id="padre">hola soy el padre</div>
          <div class="tab-pane fade" id="madre">hola soy la madre</div>

        </div>
        <ul class="nav nav-tabs " role="tablist" style="padding-top: 15px;">
            <li class="active"><a href="#hijo1" role="tab" data-toggle="tab">Hijo</a></li>
            <li><a href="#" role="tab" data-toggle="tab"><i class="fa fa-plus"></i></a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content table-bordered">
            <div class="tab-pane active fade" id="hijo1">...</div>
            <div class="tab-pane fade" id="plus">...</div>
        </div>
{{ Form::close() }}
        <div class="row" ng-view>
            {{HTML::script('https://ajax.googleapis.com/ajax/libs/angularjs/1.3.0/angular.min.js')}}
            {{ HTML::script('js/app.js') }}
            {{ HTML::script('js/controllers.js') }}
        </div>

<div class="row">
    <div class="large-12 columns">
        <label>Filtra tu búsqueda: </label>
        <input type="text" ng-model="buscador" />
    </div>
    <div class="large-12 columns">
        <label>Establece un orden: </label>
        <select ng-model="tipoOrden">
            <option value="">Ordena por Id</option>
            <option value="id">Ascendente</option>
            <option value="-id">Descendente</option>
        </select>
    </div>
</div>

<div class="row">
    <h1 class="subheader">Combinando Laravel 4 y AngularJS</h1>
    <ul>
        <li ng-repeat="data in datos|filter:buscador|orderBy:tipoOrden" class="panel callout radius">
            <p>Id: {[ data.id ]} </p>
            <p>Título: {[ data.name ]}</p>
            <p>Contenido: {[ data.SBIF ]}</p>
        </li>
    </ul>
</div>
@stop
