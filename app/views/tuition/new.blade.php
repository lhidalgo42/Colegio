@extends('layouts.master')

@section('content')
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            @include('navs.top')
            @include('navs.left')
        </nav>

        {{ Form::open(['url' => 'tuition/new', 'method' => 'post']) }}
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Nueva Matricula
                        <button class="pull-right btn btn-primary disabled" id="next" type="submit">Siguente</button>
                    </h1>

                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                @include('tuition.sections.family')
            </div>
            <div class="row">
                <ul class="nav nav-pills nav-justified" id="tabs" style="margin-bottom: 15px;">
                    <li class="active"><a data-toggle="pill" href="#parents">Padres</a></li>
                    <li><a data-toggle="pill" href="#children">Alumnos</a></li>
                    <!-- <li><a data-toggle="pill" href="#payments">Pagos</a></li> -->
                </ul>
            </div>
            <div class="row" style="padding-bottom: 70px;">
                <div class="tab-content" id="content">
                    @include('tuition.sections.parents')
                    @include('tuition.sections.children')
                            <!--@include('tuition.sections.payments') -->
                </div>
            </div>
        </div>
        {{Form::close()}}
    </div>
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip();
            $("#tabs").children().click(function () {
                createMatricula();
            })
            $('input').keyup(function () {
                validations();

            })

        })
    </script>
@stop