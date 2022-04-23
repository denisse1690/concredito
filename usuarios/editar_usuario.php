<?php include '../extend/header.php'; 
if ($_SESSION["tipo"]!="ADMINISTRADOR") {
    echo '<script>
      location.href="../index.php";
      </script>';
}
$id = $_REQUEST['id'];

$sel = $con->query("SELECT * FROM usuarios WHERE id = '$id' ");
if ($f= $sel->fetch_assoc()) {

}

?>

<div class="row">
        <div class="col s12">
          <div class="card ">
            <div class="card-content black-text">
              <span class="card-title black-text">EDICION DE USUARIO</span>
              <form action="up_usuarios.php" class="form" autocomplete="off" method="post">
              <input type="hidden" name="id" value="<?php echo $f['id']; ?>">
              <label  class="bold black-text">Nick: </label>
              <input type="text" name="user" value="<?php echo $f['user']; ?>" id="user" onblur="mayusculas(this.value,this.id)" readonly>
              <label class="bold black-text">Nombre completo:</label>
              <input type="text" name="nombre" value="<?php echo $f['nombre']; ?>" required placeholder="NOMBRE COMPLETO" class="may" id="nombre" onblur="mayusculas(this.value,this.id)">
              <label class="bold black-text">Teléfono: </label>
              <input type="text" name="tel" value="<?php echo $f['tel']; ?>" >
              <label class="bold black-text">Administrador:</label>
              <select name="admin" required class="browser-default">
                <option value="<?php echo $f['admin']; ?>"><?php echo $f['admin']; ?></option>
                <?php 
                $sel2 = $con -> query("SELECT user FROM usuarios WHERE tipo='ADMINISTRADOR' ");
                while ($f2=$sel2->fetch_assoc()) { 
                 ?>
                <option value="<?php echo $f2['user'] ?>"><?php echo $f2['user'] ?></option>
              <?php } ?>
              </select><br>
              <input type="hidden" name="tabla" value="usuarios">
              <input type="hidden" name="url" value="<?php echo $url ?>">
              <button type="submit" class="btn green" id="boton" >Guardar cambios</button>

              </form>
            </div>
          </div>
        </div>
      </div>
<script>
   $("form").keypress(function(e) {
        if (e.which == 13) {
            return false;
        }
    });
</script>
<?php include '../extend/footer.php'; ?>