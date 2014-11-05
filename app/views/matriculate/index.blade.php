@extends('...layouts.masters.master-matriculate')

@section('content')

<form  action="javascript:preguntar()">
<!--Despliega Errores-->
 <p><span id="mensaje" class="alert-danger"></span></p><br>
<div id="padres">@include('matriculate.partials.parents')</div>
<div class="clearfix"></div>
<div id="ninos" class="opaco">@include('matriculate.partials.students')</div>
<div class="clearfix"></div>
<div id="coutaIncorporacion" class="pagosContainer opaco">
	<div><input type="button" id="cIncBtn" class="btn btn-block btn-large" value="PAGAR CUOTA INCORPORACION"></div>
	<div id="cInc" class="pago">@include('matriculate.partials.pay_incorporate')</div>
</div>
<div id="documentos" class="pagosContainer opaco">
	<div><input type="button" id="cDocBtn" value="PAGAR DOCUMENTOS" class="btn btn-block btn-large"></div>
	<div id="cDoc" class="pago">@include('matriculate.partials.documents')</div>
</div>
<div id="almuerzos" class="pagosContainer opaco">
	<div><input type="button" id="cAlmBtn" class="btn btn-block btn-large" value="PAGAR ALMUERZOS"></div>
	<div id="cAlm" class="pago">@include('matriculate.partials.lunch')</div>

</div>
    </div>
<button type="submit" class="btn btn-success btn-block btn-large"><strong>Siguente</strong></button>
</form>

@stop
