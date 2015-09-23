@extends('layouts.master')

@section('content')
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            @include('navs.top')
            @include('navs.left')
        </nav>


        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Nueva Matricula </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="familyName">Nombre de la Familia</label>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="El Nombre de la Familia se concantena con el apellido de los padres."><i class="fa fa-question-circle"></i></a>
                    {{ Form::text('familyName', Input::old('familyName'), array('placeholder' => 'Nombre de la Familia','class' => 'form-control','id' => 'familyName','disabled' => 'disabled')) }}
                </div>
                <div class="form-group col-md-6">
                    <label for="ae">Apoderado Económicos</label>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Apoderado Económico del niño"><i class="fa fa-question-circle"></i></a>
                   <select class="form-control" id="ae" name="ae">
                       <option value="0">Seleccione Apoderado Económico</option>
                       <option value="1">Madre</option>
                       <option value="2">Padre</option>
                   </select>
                </div>
            </div>
            <div class="row">
                <ul class="nav nav-pills nav-justified">
                    <li class="active"><a data-toggle="tab" href="#parents">Padres</a></li>
                    <li><a data-toggle="tab" href="#children">Hijos</a></li>
                    <li><a data-toggle="tab" href="#payments">Pagos</a></li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="row">
                     <div id="parents" class="tab-pane fade in active">
                    <div class="col-md-6">
                        <h3 class="page-header text-center">Madre</h3>
                    </div>
                    <div class="col-md-6">
                        <h3 class="page-header text-center">Padre </h3>
                    </div>
                </div>
                <div id="children" class="tab-pane fade">

                </div>
                <div id="payments"  class="tab-pane fade">

                </div>
                    </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
@stop