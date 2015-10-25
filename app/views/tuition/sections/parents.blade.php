<div id="parents" class="tab-pane fade in active">
    <div class="col-md-6">
        <h3 class="page-header text-center" id="mama">Madre</h3>

        <div class="form-group">
            <label for="motherRUT">RUT</label>
            {{ Form::text('motherRUT', Input::old('motherRUT'), array('placeholder' => 'RUT','class' => 'form-control','id' => 'motherRUT')) }}
        </div>
        <div class="form-group">
            <label for="motherName">Nombres</label>
            {{ Form::text('motherName', Input::old('motherName'), array('placeholder' => 'Nombres','class' => 'form-control','id' => 'motherName')) }}
        </div>
        <div class="form-group">
            <label for="motherLastname">Apellido Paterno</label>
            {{ Form::text('motherLastname', Input::old('motherLastname'), array('placeholder' => 'Apellido Paterno','class' => 'form-control','id' => 'motherLastname')) }}
        </div>
        <div class="form-group">
            <label for="motherLastname2">Apellido Materno</label>
            {{ Form::text('motherLastname2', Input::old('motherLastname2'), array('placeholder' => 'Apellido Materno','class' => 'form-control','id' => 'motherLastname2')) }}
        </div>
        <div class="form-group">
            <label for="motherMail">Correo Electronico</label>
            {{ Form::text('motherMail', Input::old('motherMail'), array('placeholder' => 'Correo Electronico','class' => 'form-control','id' => 'motherMail')) }}
        </div>

    </div>
    <div class="col-md-6">
        <h3 class="page-header text-center" id="papa">Padre </h3>

        <div class="form-group">
            <label for="fatherRUT">RUT</label>
            {{ Form::text('fatherRUT', Input::old('fatherRUT'), array('placeholder' => 'RUT','class' => 'form-control','id' => 'fatherRUT')) }}
        </div>
        <div class="form-group">
            <label for="fatherName">Nombres</label>
            {{ Form::text('fatherName', Input::old('fatherName'), array('placeholder' => 'Nombres','class' => 'form-control','id' => 'fatherName')) }}
        </div>
        <div class="form-group">
            <label for="fatherLastname">Apellido Paterno</label>
            {{ Form::text('fatherLastname', Input::old('fatherLastname'), array('placeholder' => 'Apellido Paterno','class' => 'form-control','id' => 'fatherLastname')) }}
        </div>
        <div class="form-group">
            <label for="fatherLastname2">Apellido Materno</label>
            {{ Form::text('fatherLastname2', Input::old('fatherLastname2'), array('placeholder' => 'Apellido Materno','class' => 'form-control','id' => 'fatherLastname2')) }}
        </div>
        <div class="form-group">
            <label for="fatherMail">Correo Electronico</label>
            {{ Form::text('fatherMail', Input::old('fatherMail'), array('placeholder' => 'Correo Electronico','class' => 'form-control','id' => 'fatherMail')) }}
        </div>
    </div>
</div>
<script>
    $("#motherName").keyup(function(){
        $("#mama").html($(this).val().toUpperCase()+' '+$("#motherLastname").val().toUpperCase())
    });
    $("#motherLastname").keyup(function(){
        $("#mama").html($("#motherName").val().toUpperCase()+' '+$(this).val().toUpperCase());
        $("#family").val($("#fatherLastname").val().toUpperCase()+' '+$(this).val().toUpperCase())
        $(".alumnoLastname2").val($(this).val().toUpperCase())
    });
    $("#fatherName").keyup(function(){
        $("#papa").html($(this).val().toUpperCase()+' '+$("#fatherLastname").val().toUpperCase())
    });
    $("#fatherLastname").keyup(function(){
        $("#papa").html($("#fatherName").val().toUpperCase()+' '+$(this).val().toUpperCase());
        $("#family").val($(this).val().toUpperCase()+' '+$("#motherLastname").val().toUpperCase())
        $(".alumnoLastname").val($(this).val().toUpperCase())
    })
</script>