<?php include '../extend/header.php';
$estatus = htmlentities($_REQUEST['estatus']);
$sel = $con -> query("SELECT id, nombre, app, apm, estatus, comentario FROM prospectos WHERE estatus ='$estatus' ORDER BY nombre, app, apm ");
$num = mysqli_num_rows($sel);
 ?>
<br>
<div class="row">
  <div class="col s12">
   <input type="search" autocomplete="off" placeholder="Buscar..." class="buscador buscar" onkeyup="buscar();">
 </div>
</div>

 <div class="row" id="muestra">
              <div class="col s12">
                <div class="card ">
                  <span class="card-title black-text">
                    <table width="100%">
                      <tr>
                        <td width="10%"><img src="../img/logo.png" width="70"></td>
                        <td width="90%"><h5><center>REPORTE DE PROSPECTOS <?php echo $estatus ?> (<?php echo $num ?>)</center></h5></td>
                      </tr>
                    </table>
                    <center>
                      <form action="../excel/fichero.php?nombre=PROSPECTOS" method="post" target="_blank" id="FormularioExportacion">
                        <a href="#" class="botonExcel green-text tooltipped oc kill" id="exc" data-position="bottom" data-delay="50" data-tooltip="Exportar a Excel"><i class="material-icons">grid_on</i></a>
                        <input type="hidden" id="datos_a_enviar" name="datos_a_enviar" />
                        <a href="javascript:imprSelec('muestra')" class="orange-text oc"><i class="material-icons">print</i></a>
                      </form></span>
                      <table class="striped responsive-table excel" border="1" cellpadding="2" cellspacing="2" width="100%" style="font-size:12px;">
                        <thead>
                        <th class="oc kill"></th>
                        <th>NOMBRE</th>
                        <th>A. MATERNO</th>
                        <th>A. PATERNO</th>
                        <th class="oc kill">DOCS</th>
                        <th class="oc kill"></th>
                        <th class="oc kill"></th>
                        </thead>
                         <?php 
                         while ($f = $sel -> fetch_assoc()) { ?>
                         <tr class="filter" >
                            <td class="oc kill"><a href="#" onclick="abrir(), showHint(this.id)" id="<?php echo $f['id'] ?>" class="blue-text" ><i class="material-icons">visibility</i></a></td>
                            <td><?php echo $f['nombre'] ?></td>
                            <td><?php echo $f['app'] ?></td>
                            <td><?php echo $f['apm'] ?></td>
                            <td class="oc kill"> <a href="documentos.php?id=<?php echo $f['id'] ?>" class="green-text" title="Documentos"><i class="material-icons">add</i></a>
                            </td>
                            <?php if ($tipo == "ADMINISTRADOR" AND $f['estatus'] == 'ENVIADO'): ?>
                              <td class="oc kill">
                                <a href="#" class="blue-text" title="Aceptar prospecto" onclick="swal({   title: '¿Seguro que desea aceptar al prospecto?',   text: 'Esta accion no se puede deshacer!',   type: 'success',   showCancelButton: true,   confirmButtonColor: '#DD6B55',   confirmButtonText: 'Si, aceptarlo!', cancelButtonText: 'Cancelar' }, function(isConfirm){   if (isConfirm) { location.href='aceptar_prospecto.php?id=<?php echo $f["id"] ?>'; }else{return false;} });"><i class="material-icons">done</i></a>
                              </td>
                              <td>
                                <a href="rechazar_prospecto.php?id=<?php echo $f['id'] ?>" class="red-text" title="Rechazar prospecto"><i class="material-icons">clear</i></a>
                              </td>
                            <?php elseif ($f['estatus'] == 'RECHAZADO'): ?>
                              <td colspan="2"><?php echo $f['comentario']; ?></td>
                            <?php else: ?>
                              <td colspan="2"></td>
                            <?php endif ?>
                         </tr>
                         <?php } ?>         
                      </table>
                    </div>
                  </div>
                </div>
<div id="modal" class="modal">
    <div class="modal-content">
      <h5>PROSPECTO</h5>
      <div id="res"></div>
    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">aceptar</a>
    </div>
  </div>       
<script>
 function abrir(){
    $('#modal').openModal();
  }


function showHint(str)
{
if (str.length==0) { 
    document.getElementById("res").innerHTML="";
    return;
} else {
    var xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() {
        if (xmlhttp.readyState==4 && xmlhttp.status==200) {
            document.getElementById("res").innerHTML=xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","ojito_prospecto.php?q="+str,true);
    xmlhttp.send();
}    
}
</script>

            
<?php include '../extend/footer.php'; ?>