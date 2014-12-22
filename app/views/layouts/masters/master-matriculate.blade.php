<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    {{HTML::style('http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css')}}
    {{HTML::style('http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css')}}
    {{HTML::style('packages/css/bootstrap-datetimepicker.min.css')}}
    <style>
        #tabs > a{
            margin: 10px;
        }
    </style>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      {{HTML::script('http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}
      {{HTML::script('http://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}
    <![endif]-->

         <!-- Bootstrap core JavaScript
         ================================================== -->
         <!-- Placed at the end of the document so the pages load faster -->
         {{HTML::script('http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js')}}
         {{HTML::script('http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js')}}
         <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      {{HTML::script('packages/js/moment-with-locales.js')}}
      {{HTML::script('packages/js/bootstrap-datetimepicker.js')}}

         {{HTML::script('js/rut.js')}}

</head>
<body>

<!-- #############Content##############-->
<div class="container" style="padding-top: 30px;">
    @yield('content')
</div>
<script>
    $(document).ready(function(){
        $("input").blur(function(){this.value=this.value.toUpperCase();});
    });
</script>
<!-- #############/Content##############-->

</body>
</html>