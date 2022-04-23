<?php include '../extend/headerphp.php';

$array = array();
foreach ($_POST as $nombre_campo => $valor) { 
 $asignacion = "\$" . $nombre_campo . "='" . htmlentities($valor) . "';"; 
 eval($asignacion);       
$array[] = "" . $valor .  ""; 
 }

 $ins = $con -> query("UPDATE $tabla SET nombre ='$nombre', tel='$tel',admin='$admin' WHERE id = '$id' ");

 		if ($ins) {
	echo '<script>
		location.href="'.$url.'";
		</script>';
}else{
	echo '<script>
 	swal({   title: "Oops...",   text: "Los datos no pudieron ser editados!",   type: "error",   confirmButtonColor: "#DD6B55",   confirmButtonText: "ok!", }, function(isConfirm){   if (isConfirm) {    location.href="'.$url.'"; } });
 	</script>';
}

 ?>

