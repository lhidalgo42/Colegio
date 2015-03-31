
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Colegio Giordano Bruno</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/packages/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/packages/sweetalert/lib/sweet-alert.css">

    <!-- Le styles -->
    <style>
        .form-signin {
            background-image: url('/img/bg_nav_left.png');
            background-repeat: no-repeat;
        }
    </style>
    <!-- le js -->
    <script src="/packages/jquery/dist/jquery.min.js"></script>
    <script src="/packages/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/packages/sweetalert/lib/sweet-alert.min.js"></script>
</head>
<body>




<!-- #############Content##############-->


<div class="container-fluid content">


{{ Form::open(['route'=> 'sessions.store','class' => 'form-signin']) }}
    <fieldset style="margin: 35px;">
        <div class="form-group" style="text-align: center;">
            {{Form::text('rut',Input::old('rut'),array('class' => 'form-control','id' => 'rut', 'placeholder' => 'Rut','maxlength' => 15,'autofocus'))}}
        </div>
        <div class="form-group" style="text-align: center;">
            {{Form::password('password',Input::old('password'),array('class' => 'form-control','id' => 'password', 'placeholder' => 'Contraseña'))}}
        </div>
            <div class="checkbox">
                <label>
                    {{ Form::checkbox('remember', true) }} <strong>Recordarme</strong>
                </label>
            </div>
        <button class="btn btn-primary btn-lg btn-block" type="submit" style="text-align: center;"><strong>Ingresar</strong></button>

        @if(Session::has('error'))
            <script>
                sweetAlert("Oops...", '{{Session::get('error')}}', "error");
            </script>
        @endif
    </fieldset>
{{ Form::close() }}
</div>
</body>
</html>