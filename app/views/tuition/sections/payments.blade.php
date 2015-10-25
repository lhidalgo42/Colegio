<div id="payments"  class="tab-pane fade">
    <div class="row">
        <ul class="nav nav-pills nav-justified" style="margin-bottom: 15px;">
            <li class="active"><a data-toggle="pill" href="#pagoMatricula" datatype="pagoMatricula">Pago de Matricula / Clinica</a></li>
            <li><a data-toggle="pill" href="#pagoMensualidad" datatype="PagoMensualidad">Pago Mensualidad</a></li>
            <li><a data-toggle="pill" href="#cuotaIncorporacion" datatype="CuotaIncorporacion">Cuota de Incorporacion</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="tab-content">
            @include('tuition.sections.payments.matricula')
            @include('tuition.sections.payments.mensualidad')
            @include('tuition.sections.payments.incorporacion')
        </div>
    </div>


</div>