<div class="form-group col-md-6">
    <label for="familyName">Nombre de la Familia</label>
    <a href="#" data-toggle="tooltip" data-placement="top"
       title="El Nombre de la Familia se concantena con el apellido de los padres."><i
                class="fa fa-question-circle"></i></a>
    {{ Form::text('family', Input::old('family'), array('placeholder' => 'Nombre de la Familia','class' => 'form-control','id' => 'family','readonly' => 'readonly')) }}
</div>
<div class="form-group col-md-6">
    <label for="ae">Apoderado Económicos</label>
    <a href="#" data-toggle="tooltip" data-placement="top" title="Apoderado Económico del niño"><i
                class="fa fa-question-circle"></i></a>
    <select class="form-control" id="ae" name="ae">
        <option value="0">Seleccione Apoderado Económico</option>
        <option value="1">Madre</option>
        <option value="2">Padre</option>
    </select>
</div>