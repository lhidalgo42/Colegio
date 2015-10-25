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
                    <h1 class="page-header">Matriculas Hechas</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <!-- /.row -->
            <div class="row">
                <div class="col-md-4">
                    <h3>Familias <a href="#" data-toggle="tooltip" data-placement="top" title="Click para ver mas detalles"><i
                                    class="fa fa-question-circle"></i></a></h3>
                <div class="list-group" id="families">
                    @foreach($families as $family)
                    <a href="#" class="list-group-item" id-family="{{$family->id}}">Familia {{$family->name}}</a>
                    @endforeach
                </div>
                    </div>
                <script>
                    $("#families").children().click(function(){
                        $.ajax({
                            url: "/family/"+$(this).attr('id-family'),
                            success: function( data ) {
                                $( "#weather-temp" ).html( "<strong>" + data + "</strong> degrees" );
                            }
                        });
                    });
                </script>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

@stop