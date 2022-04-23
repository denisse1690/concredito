<?php include '../extend/headerphp.php';
$id = htmlentities($_REQUEST['id']);
$up = $con->query("UPDATE prospectos SET estatus='ACEPTADO' WHERE id = '$id' ");
if ($up) {
	echo '<script>
 	swal({   title: "Bien hecho",   text: "El prospecto fue aceptado!",   type: "success",   confirmButtonColor: "#4CAF50",   confirmButtonText: "ok!", }, function(isConfirm){   if (isConfirm) {    location.href="panel.php"; } });
 	</script>';
}else{
	echo '<script>
 	swal({   title: "Oops...",   text: "El prospecto no pudo ser aceptado!",   type: "error",   confirmButtonColor: "#DD6B55",   confirmButtonText: "ok!", }, function(isConfirm){   if (isConfirm) {    location.href="panel.php"; } });
 	</script>';
}
 ?>