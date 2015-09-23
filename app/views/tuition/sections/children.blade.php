<div id="children" class="tab-pane fade">
    <div class="col-md-3">
        <ul class="nav nav-pills nav-stacked" id="childrens-tab">
            @foreach(range(1,4) as $number)
            <li @if($number==1) class="active" @endif><a data-toggle="tab" data-children="alumno{{$number}}" href="#alumno{{$number}}">Alumno {{$number}}</a></li>
            @endforeach
        </ul>
    </div>
    <div class="col-md-9">
        <div class="tab-content " id="children-content">
            @foreach(range(1,4) as $number)
            <div id="alumno{{$number}}" class="tab-pane fade @if($number == 1)in active @endif">
                <div class="form-group">
                    <label for="alumno{{$number}}RUT">RUT</label>
                    {{ Form::text('alumno'.$number.'RUT', Input::old('alumno'.$number.'RUT'), array('placeholder' => 'RUT','class' => 'form-control','id' => 'alumno'.$number.'RUT')) }}
                </div>
                <div class="form-group">
                    <label for="alumno{{$number}}Name">Nombre</label>
                    {{ Form::text('alumno'.$number.'Name', Input::old('alumno'.$number.'Name'), array('placeholder' =>
                    'Nombre','class' => 'form-control alumnoName','id' => 'alumno'.$number.'Name','data-parent' => 'alumno'.$number)) }}
                </div>
                <div class="form-group">
                    <label for="alumno{{$number}}Lastname">Apellido Paterno</label>
                    {{ Form::text('alumno'.$number.'Lastname', Input::old('alumno'.$number.'Lastname'),
                    array('placeholder' => 'Apellido Paterno','class' => 'form-control alumnoLastname','id' => 'alumno'.$number.'
                    Lastname','data-parent' => 'alumno'.$number)) }}
                </div>
                <div class="form-group">
                    <label for="alumno{{$number}}Lastname2">Apellido Materno</label>
                    {{ Form::text('alumno'.$number.'Lastname2', Input::old('alumno'.$number.'Lastname2'),
                    array('placeholder' => 'Apellido Materno','class' => 'form-control','id' => 'alumno'.$number.'
                    Lastname2')) }}
                </div>
                <div class="form-group">
                    <label for="alumno{{$number}}Grade">Curso</label>
                    {{Form::select('alumno'.$number.'Grade',$grades,Input::old('alumno'.$number.'Grade'),array('class' => 'form-control','id' => 'alumno'.$number.'Grade'))}}
                </div>

            </div>
            @endforeach
        </div>
    </div>

</div>