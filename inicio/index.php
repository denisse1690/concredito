<?php include '../extend/header.php'; ?>

<div class="row">
        <div class="col s12 m12 l12">
          <div class="card ">
            <div class="card-content black-text">
              <span class="card-title black-text">REGISTRO DE PROSPECTO</span>
              <form action="ins_prospecto.php" class="form" autocomplete="off" method="post">
              <input type="hidden" name="tipo" value="USUARIO" >
              <label class="bold black-text">Nombre:</label>
              <input type="text" name="nombre" pattern="[a-zA-Z/s ]+" id="nombre" onblur="mayusculas(this.value,this.id)" required placeholder="NOMBRE" class="may">
              <label class="bold black-text">Apellido Paterno:</label>
              <input type="text" name="app" pattern="[a-zA-Z/s ]+" id="app" onblur="mayusculas(this.value,this.id)" required placeholder="APELLIDO PATERNO" class="may">
              <label class="bold black-text">Apellido Materno:</label>
              <input type="text" name="apm" pattern="[a-zA-Z/s ]+" id="apm" onblur="mayusculas(this.value,this.id)" placeholder="APELLIDO MATERNO" class="may">
              <label class="bold black-text">Calle:</label>
              <input type="text" name="calle" pattern="[a-zA-Z/s ]+" id="calle" onblur="mayusculas(this.value,this.id)" placeholder="CALLE" class="may">
              <label class="bold black-text">Numero Ext.:</label>
              <input type="number" name="num_ext" id="num_ext" placeholder="NUM EXT." class="may">
              <label class="bold black-text">Colonia:</label>
              <input type="text" name="colonia" pattern="[a-zA-Z/s ]+" id="colonia" onblur="mayusculas(this.value,this.id)" placeholder="COLONIA" class="may">
              <label class="bold black-text">CP:</label>
              <input type="number" name="cp" id="cp" max="99999" placeholder="CODIGO POSTAL" class="may">
              <label class="bold black-text">Teléfono: </label>
              <input type="text" name="tel" max="9999999999" placeholder="TELEFONO" >
              <label class="bold black-text">RFC:</label>
              <input type="text" name="rfc" min="12" max="13" id="rfc" onblur="mayusculas(this.value,this.id)" placeholder="RFC" class="may">
              <input type="hidden" name="usuario" value="<?php echo $user ?>">
              <button type="submit" class="btn green" id="boton" >Guardar</button>
              </form>
            </div>
          </div>
        </div>
</div>
<div class="row">
        <div class="col s12">
           <input type="search" autocomplete="off" placeholder="Buscar..." class="buscador buscar" onkeyup="buscar();">
        </div>
      </div>
<?php $sel=$con-> query("SELECT  id, nombre, app, apm FROM prospectos WHERE estatus = 'ENVIADO' "); 
        $rows = mysqli_num_rows($sel);?>
<div class="row">
      <div class="col s12">
        <div class="card ">
            <div class="card-content black-text">
              <span class="card-title black-text">PROSPECTOS ENVIADOS(<?php echo $rows ?>)</span>
          <table class="striped responsive-table" cellpadding="2" style="font-size:12px;" border="1" width="100%">
            <th></th>
            <th>NOMBRE</th>
            <th>A. MATERNO</th>
            <th>A. PATERNO</th>
            <th>DOCS</th>
            <?php while ($f=$sel->fetch_assoc()) { 
                ?>
              <tr class="filter">
                <td><a href="#" onclick="abrir(), showHint(this.id)" id="<?php echo $f['id'] ?>" class="blue-text" ><i class="material-icons">visibility</i></a></td>
                <td><?php echo $f['nombre'] ?></td>
                <td><?php echo $f['app'] ?></td>
                <td><?php echo $f['apm'] ?></td>
                <td>
                  <a href="documentos.php?id=<?php echo $f['id'] ?>" class="green-text" title="Documentos"><i class="material-icons">add</i></a>
                </td>
              </tr>
              <?php } ?>
          </table>
        </div>
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


  $("form").keypress(function(e) {
        if (e.which == 13) {
            return false;
        }
    });
$('.tooltipped').tooltip({delay: 50});
</script>

<?php include '../extend/footer.php'; ?>