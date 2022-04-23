<?php include '../extend/headerphp.php';

$array = array();
foreach ($_POST as $nombre_campo => $valor) { 
 $asignacion = "\$" . $nombre_campo . "='" . htmlentities($valor) . "';"; 
 eval($asignacion);       
$array[] = "" . $valor .  ""; 
 }

 $ins = $con -> query("INSERT INTO prospectos VALUES(DEFAULT,'$nombre','$app','$apm','$calle','$num_ext','$colonia','$cp','$tel','$rfc','ENVIADO','$usuario',NULL)");
 
if ($ins) {
	echo '<script>
		location.href="index.php";
		</script>';
}else{
	echo '<script>
 	swal({   title: "Oops...",   text: "El prospecto no pudo ser guardado!",   type: "error",   confirmButtonColor: "#DD6B55",   confirmButtonText: "ok!", }, function(isConfirm){   if (isConfirm) {    location.href="index.php"; } });
 	</script>';
}

 ?>

