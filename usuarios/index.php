<?php include '../extend/header.php'; 
if ($_SESSION["tipo"]!="ADMINISTRADOR") {
    echo '<script>
      location.href="../index.php";
      </script>';
}
?>
<div class="row">
        <div class="col s12">
          <div class="card ">
            <div class="card-content black-text">
              <span class="card-title black-text">CONTROL DE USUARIOS</span>
              <form action="ins_usuarios.php" class="form" autocomplete="off" method="post">
              <label  class="bold black-text">Nick: </label>
              <input type="text" name="user" autofocus required placeholder="DEBE CONTENER ENTRE 8 Y 15 LETRAS" id="user"  pattern="[A-Za-z]{8,15}" id="nick" onblur="mayusculas(this.value,this.id)">
              
             <div id="existe"></div>
              </form>
            </div>
          </div>
        </div>
      </div>
<input type="hidden" id="administrador" value="<?php echo $administrador ?>">
<div class="row">
        <div class="col s12">
           <input type="search" autocomplete="off" placeholder="Buscar..." class="buscador buscar" onkeyup="buscar();">
        </div>
      </div>
<?php $sel=$con-> query("SELECT * FROM usuarios"); 
        $rows = mysqli_num_rows($sel);?>
<div class="row">
      <div class="col s12">
        <div class="card ">
            <div class="card-content black-text">
              <span class="card-title black-text">USUARIOS (<?php echo $rows ?>)</span>
          <table class="striped responsive-table" cellpadding="2" style="font-size:12px;" border="1" width="100%">
            <th>NOMBRE</th>
            <th>NICK</th>
            <th>PERMISO</th>
            <th>ADMIN</th>
            <th>TEL</th>
            <th class="oc kill">OPCIONES</th>
            <?php while ($f=$sel->fetch_assoc()) { 
                ?>
              <tr class="filter">
                <td><?php echo $f['nombre'] ?></td>
                <td><?php echo $f['user'] ?></td>
                <td><?php echo $f['tipo'] ?></td>
                <td><?php echo $f['admin'] ?></td>
                <td><?php echo $f['tel'] ?></td>
                <td class="oc kill"><a href="editar_usuario.php?id=<?php echo $f['id'] ?>" class="blue-text tooltipped" data-position="bottom" data-delay="50" data-tooltip="Editar usuario"><i class="small material-icons">loop</i></a>
                <a href="#" class="red-text tooltipped" data-position="bottom" data-delay="50" data-tooltip="Eliminar usuario" onclick="swal({   title: '¿Seguro que desea eliminar el usuario?',   text: 'Al eliminarlo no podra recuperarlo!',   type: 'warning',   showCancelButton: true,   confirmButtonColor: '#DD6B55',   confirmButtonText: 'Si, eliminarlo!', cancelButtonText: 'Cancelar' }, function(isConfirm){   if (isConfirm) { location.href='eliminar_usuario.php?id=<?php echo $f["id"] ?>&user=<?php echo $f['user'] ?>'; }else{return false;} });"><i class="small material-icons">clear</i></a>
                </td>
              </tr>
              <?php } ?>
          </table>
        </div>
        </div>
      </div>
    </div>
            
<script>

  $('#user').change(function(){
              $.post('ajax_existe.php',{
                        user:$("#user").val(),
                        administrador:$("#administrador").val(),
                   beforeSend: function(){
                        $('#existe').html("espere un momento......");
                    }
                 
              },  function(respuesta){
                         $('#existe').html(respuesta);
                     }); 

           }); // finaliza boton

  $("form").keypress(function(e) {
        if (e.which == 13) {
            return false;
        }
    });
$('.tooltipped').tooltip({delay: 50});


</script>

<?php include '../extend/footer.php'; ?>