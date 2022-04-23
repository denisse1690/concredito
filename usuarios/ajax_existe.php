<?php include '../conexion/conexion.php'; 
$usuario = $_POST['user'];
$administrador = $_POST['administrador'];
$sel = $con -> query("SELECT user FROM usuarios WHERE user='$usuario' ");
$num = mysqli_num_rows($sel);
if ($num!=0) {
	echo "<label style='color:red;'>El nombre de usuario ya existe</label>";
}else{
?>
<label  class="bold black-text">Contraseña:</label>
<input type="password" name="pass" required id="pas1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" max="15" placeholder="DEBE CONTENER AL MENOS UN NUMERO, UNA LETRA MINUSCULA Y MAYUSCULA, Y ENTRE 8 Y 15 CARACTERES" >
<label  class="bold black-text">Confirmar Contraseña:</label>
<input type="password" name="repass" required id="pas2" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" max="15" placeholder="DEBE CONTENER AL MENOS UN NUMERO, UNA LETRA MINUSCULA Y MAYUSCULA, Y ENTRE 8 Y 15 CARACTERES" ><span id="texto"></span>
<br>
<input type="hidden" name="tipo" value="USUARIO" >
<label class="bold black-text">Nombre completo:</label>
<input type="text" name="nombre" pattern="[a-zA-Z/s ]+" id="nombre" onblur="mayusculas(this.value,this.id)" required placeholder="NOMBRE COMPLETO DEL TRABAJADOR" class="may">
<label class="bold black-text">Teléfono: </label>
<input type="text" name="tel" placeholder="TELEFONO" >
<input type="hidden" name="admin" value="<?php echo $administrador ?>">
<input type="hidden" name="bloq" value="ACTIVO" >

<input type="hidden" name="tabla" value="usuarios">
<button type="submit" class="btn green" id="boton" >Guardar</button>
 <?php } ?>
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