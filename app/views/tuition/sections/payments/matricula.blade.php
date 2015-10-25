<div id="pagoMatricula" class="tab-pane fade in active">
    <div class="col-md-3">
        <ul class="nav nav-pills nav-stacked" id="payments-tab">
            @foreach(range(1,4) as $number)
                <li @if($number == 1) class="active" @endif ><a data-toggle="tab" data-children="payment{{$number}}" href="#payment{{$number}}">Alumno {{$number}}</a></li>
            @endforeach
        </ul>
    </div>
    <div class="col-md-9 tab-content">
        @foreach(range(1,4) as $number)
            <div id="payment{{$number}}" class="tab-pane fade @if($number == 1) in active @endif">
                <div class="form-group">
                    <label for="payment{{$number}}Matricula">Matricula</label>
                    {{ Form::number('payment'.$number.'Matricula', Input::old('payment'.$number.'Matricula'),
                    array('placeholder' => 'Matricula','class' => 'form-control','id' => 'payment'.$number.'Matricula')) }}
                </div>
            </div>
        @endforeach
    </div>
</div>
<script>

</script>