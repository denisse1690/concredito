<?php include '../extend/header.php';
$id = $_REQUEST['id'];
 ?>

<div class="row">
        <div class="col s12">
          <div class="card ">
            <div class="card-content black-text">
              <span class="card-title black-text">CAMBIAR CONTRASEÑA</span>
              <form action="up_contra.php" class="form" autocomplete="off" method="post">
              <label  class="bold black-text">Contraseña:</label>
              <input type="password" name="pass" required id="pas1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" max="15" placeholder="DEBE CONTENER AL MENOS UN NUMERO, UNA LETRA MINUSCULA Y MAYUSCULA, Y ENTRE 8 Y 15 CARACTERES" >
              <label  class="bold black-text">Confirmar Contraseña:</label>
              <input type="password" name="repass" required id="pas2" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" max="15" placeholder="DEBE CONTENER AL MENOS UN NUMERO, UNA LETRA MINUSCULA Y MAYUSCULA, Y ENTRE 8 Y 15 CARACTERES" ><span id="texto"></span>
              <input type="hidden" name="id" value="<?php echo $id ?>">
              <input type="hidden" name="url" value="<?php echo $url ?>">
              <button type="submit" class="btn green" id="boton" >Actualizar contraseña</button>
              </form>
            </div>
          </div>
        </div>
      </div>
 <script>
$('#boton').hide();
$('#pas2').blur(function(event) {
  if ($('#pas1').val()==$('#pas2').val()) {
  	$('#texto').html('<label style="color:green;">Las contraseñas coinciden</label><br>');
$('#boton').show();
  }else{
    $('#texto').html('<label style="color:red;">Las contraseñas no coinciden</label><br>');
    $('#boton').hide();
  }
});
 $("form").keypress(function(e) {
        if (e.which == 13) {
            return false;
        }
    });
 </script>

<?php include '../extend/footer.php'; ?>