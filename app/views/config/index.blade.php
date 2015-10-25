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
                    <h1 class="page-header">Configuraciones</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <!-- /.row -->
            <div class="row">
                <div class="col-md-3">
                <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a data-toggle="tab" href="#users"><i class="fa fa-users"></i> Usuarios </a></li>
                    <li><a data-toggle="tab" href="#roles"><i class="fa fa-users"></i> Roles </a></li>
                    <li><a data-toggle="tab" href="#prices"><i class="fa fa-usd"></i> Valores</a></li>
                    <li><a data-toggle="tab" href="#reports"><i class="fa fa-file-text-o"></i> Reportes</a></li>
                </ul>
                </div>
                <div class="col-md-9">
                <div class="tab-content">
                    <div id="users" class="tab-pane fade in active">
                        <h4 class="page-header">Usuarios</h4>
                    </div>
                    <div id="prices" class="tab-pane fade">
                        <h3>Menu 1</h3>
                        <p>Some content in menu 1.</p>
                    </div>
                    <div id="roles" class="tab-pane fade">
                        <h3>Menu 2</h3>
                        <p>Some content in menu 2.</p>
                    </div>
                    <div id="reports" class="tab-pane fade">
                        <h3>Menu 2</h3>
                        <p>Some content in menu 2.</p>
                    </div>
                </div>
                    </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

@stop