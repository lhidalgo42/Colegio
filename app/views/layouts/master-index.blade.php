<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title> @yield('meta-title','Colegio Giordano Bruno')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    {{ HTML::style('http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css') }}
    {{ HTML::style('css/bootstrap-combined.min.css') }}

    @yield('css')

    <!-- Le styles -->

    <style>
        .form-signin {
            background-image: url(img/bg_nav_left.png);
            background-repeat: no-repeat;
        }
    </style>
    <!-- le js -->
    {{ HTML::script('http://code.jquery.com/jquery-1.10.2.js') }}
    {{ HTML::script('http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js') }}

    <!--[if lt IE 9]>
    {{ HTML::script('http://html5shim.googlecode.com/svn/trunk/html5.js') }}
    <![endif]-->

    @yield('js')

</head>
<body>




<!-- #############Content##############-->


<div class="container-fluid content">

    @yield('content')

    <div class="footer">
        @yield('footer')
    </div>
</div>
<!-- #############/Content##############-->






</body>
</html>