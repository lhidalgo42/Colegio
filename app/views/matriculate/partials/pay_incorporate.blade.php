<div class="span2"> N° DE PAGO Cuota Incorporación (1-20)</div>
<div class="span4">
	<input type="number" id="cuotaInc" maxlength="2" value="0">

<!-- TODO Buscar UF -->
</div><div style="padding: 30px;"><div class="span1" id="valor">0 UF</div>
    <div><div class="btn-group" id="AEconomico" data-toggle="buttons-radio">
            <button type="button" class="btn btn-success" id="btn-pago-cou-inc-si" onclick="pagoInc(0)">Pagado</button>
            <button type="button" class="btn btn-danger" onclick="pagoInc(1)">No pagado</button>
        </div>
    <br><div id="pago-cuota-inc" style="display: none;">Ingrese Monto Cancelado Anteriormente <input type="number" id="pago-cuota-inc-input" value="0" class="span3" max="52" min="0"></div> </div></div>

<script>
function pagoInc(I){
    if(I==0)
    {
        var pago= $("#valor").attr("uf");
        $("#pago-cuota-inc-input").val(pago);
        $("#pago-cuota-inc").css("display","none");
    }
    if(I==1){
        $("#pago-cuota-inc").css("display","block");


    }

}
</script>
<div class="span2" id="uf" iduf="<!-- TODO ID UF -->" uf="<!-- TODO VALOR UF -->"> Valor UF <!-- TODO Show VALOR UF --> </div><div class="2" id="hoy"></div>
<table  width="100%" border="1" class="table table-bordered" id="tablaCuotaINC">
  <tr>
    <td colspan="13"><center><strong>DOCUMENTOS GIRADOS O ACEPTADOS POR EL APODERADO POR CUOTAS REGULARES MENSUALES</strong></center></td>
  </tr>
  <tr>
  	<td rowspan="2"><center>N° Boleta</center></td>
    <td rowspan="2"><center>Vencimiento</center></td>
    <td rowspan="2"><center>Cheque - Letra Mandado Tipo/Detalle Documento N°</center></td>
    <td></td>
    <td rowspan="2"><center>TOTAL</center></td>
    <td rowspan="2"><center>FECHA DE DEPOSITO</center></td>
    <td rowspan="2"><center>OBSERVACIONES</center></td>
  </tr>
  <tr>

    <td><center>Cuota de Incorporación</center></td>
  </tr>
  </thead>
  <tbody id="pagoCuotasInc"></tbody>
  <tfoot>
  <tr>
  <td height="38" colspan="3"><center><strong>Totales :</strong></center></td>
  <td><center><div id="CouTInc"></div></center></td>
  <td><center><div id="TotalTInc"></div></center></td>
</tr>
</tfoot>
</table>