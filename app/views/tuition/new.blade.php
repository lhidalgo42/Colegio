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
                    <h1 class="page-header">Nueva Matricula
                        <button class="pull-right btn btn-primary disabled">Siguente</button>
                    </h1>

                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
            @include('tuition.sections.family')
            </div>
            <div class="row">
                <ul class="nav nav-pills nav-justified" id="tabs">
                    <li class="active"><a data-toggle="pill" href="#parents">Padres</a></li>
                    <li><a data-toggle="pill" href="#children">Alumnos</a></li>
                    <li><a data-toggle="pill" href="#payments">Pagos</a></li>
                </ul>
            </div>
            <div class="tab-content" id="content">
                <div class="row" style="padding-bottom: 70px;">
                    @include('tuition.sections.parents')
                    @include('tuition.sections.children')
                    @include('tuition.sections.payments')
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
            $('[data-toggle="tooltip"]').tooltip();
            $('#tabs a').click(function (e) {
                e.preventDefault();
                $(this).tab('show');
                $("#content").children().children().css('display', 'none');
                $($(this).attr('href')).css('display', 'block');

            })
        })
    </script>
@stop