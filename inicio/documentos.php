<?php include '../extend/header.php';
$id = htmlentities($_REQUEST['id']);
 ?>

<div class="row">
  <div class="col s12">
    <div class="card ">
      <div class="card-content black-text">
        <span class="card-title black-text">SUBIR DOCUMENTOS</span>
        <form  action="ins_documento.php" method="post" autocomplete="off" enctype="multipart/form-data" >
          <input type="hidden" name="id" value="<?php echo $id ?>">
          <div class="row" >
           <div class="col s12 m6 l6" >
            <input type="text" name="nombre_doc" id="nombre_doc" placeholder="Nombre" onblur="mayusculas(this.value,this.id)" required="" >
          </div>

          <div class="col s12 m6 l6" >
            <div class="file-field input-field">
             <div class="btn green">
              <span>DOCUMENTO</span>
              <input type="hidden" name="MAX_FILE_SIZE" value="512000" />
              <input type="file" name="documento" multiple="" required>
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>
        </div>
      </div>
      <input type="hidden" name="id" value="<?php echo $id ?>" >
      <button  type="submit" class="btn green"  >Guardar</button>
    </form>
  </div>
</div>
</div>
</div>

<div class="row">
  <?php $sel = $con->query("SELECT * FROM documentos WHERE id_prospecto = '$id'  ");?>
<div class="row">
      <div class="col s12">
        <div class="card ">
            <div class="card-content black-text">
          <table class="striped responsive-table" cellpadding="2" style="font-size:12px;" border="1" width="100%">
            <th>NOMBRE</th>
            <th></th>
            <?php while ($f=$sel->fetch_assoc()) { 
                ?>
              <tr class="filter">
                <td><?php echo $f['nombre'] ?></td>
                <td><a href="descargar.php?archivo=<?php echo $f['ruta'] ?>" class="blue-text" title="Descargar"><i class="material-icons">loop</i></a></td>
              </tr>
              <?php } ?>
          </table>
        </div>
        </div>
      </div>
    </div>
 



<?php include '../extend/footer.php'; ?>

