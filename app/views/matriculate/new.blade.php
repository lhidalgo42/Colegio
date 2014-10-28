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
@stop
