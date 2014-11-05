<table class="table table-bordered">
  <tr>
    <td><strong>Familia</strong></td>
     <td>{{Form::text('familia',Input::old('familia'),array('class' => 'col-md-3 form-control','disabled' => 'disabled')); }}</td>
    <td><strong>Apoderado Economico</strong></td>
    <td class="text-center">
  <div class="btn-group" data-toggle="buttons">
    <label class="btn btn-primary">
       {{Form::radio('apoderadoEconomico', '1',(Input::old('apoderadoEconomico') == '1'));}} PAPA
    </label>
    <label class="btn btn-primary">
    {{Form::radio('apoderadoEconomico', '0',(Input::old('apoderadoEconomico') == '0')); }} MAMA
    </label>
  </div>
  </td>
  </tr>
  <tr>
    <td><strong>Padre</strong></td>
    <td><a role="button" class="btn btn-primary" >Papa</a></td>
    <?php $data_parents = array("rut","nombre","apellido1","apellido2","fecha_nac","profesion","direccion","comuna","email","lugar_de_trabajo","direccion_de_trabajo","telefonos"); ?>
    <?php for($i=0;$i<count($data_parents);$i++){ ?>
    {{Form::hidden('papa_'.$data_parents[$i], Input::old('papa_'.$data_parents[$i])); }}
    <?php } ?>
    {{Form::hidden('papa_sexo','1'); }}

    <td><strong>Madre</strong></td>
    <td><a  role="button" class="btn btn-primary">Mama</a></td>
        <?php for($i=0;$i<count($data_parents);$i++){ ?>
        {{Form::hidden('mama_'.$data_parents[$i], Input::old('mama_'.$data_parents[$i])); }}
        <?php } ?>
        {{Form::hidden('mama_sexo','0'); }}
  </tr>
</table>

        </-- TODO Codigo Javascript -->