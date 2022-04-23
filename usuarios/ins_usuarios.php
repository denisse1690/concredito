<?php include '../extend/headerphp.php';

$array = array();
foreach ($_POST as $nombre_campo => $valor) { 
 $asignacion = "\$" . $nombre_campo . "='" . htmlentities($valor) . "';"; 
 eval($asignacion);       
$array[] = "" . $valor .  ""; 
 }

 $pass2 = sha1($pass);
 $ins = $con -> query("INSERT INTO $tabla VALUES(DEFAULT,'$nombre','$user','$pass2','$tipo','$bloq','$tel','$admin')");
if ($ins) {
	echo '<script>
		location.href="index.php";
		</script>';
}else{
	echo '<script>
 	swal({   title: "Oops...",   text: "El usuario no pudo ser guardado!",   type: "error",   confirmButtonColor: "#DD6B55",   confirmButtonText: "ok!", }, function(isConfirm){   if (isConfirm) {    location.href="index.php"; } });
 	</script>';
}

 ?>

