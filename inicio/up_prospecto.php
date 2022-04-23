<?php include '../extend/headerphp.php';
$id = htmlentities($_POST['id']);
$comentario = htmlentities($_POST['comentario']);
$up = $con->query("UPDATE prospectos SET estatus='RECHAZADO', comentario='$comentario' WHERE id = '$id' ");
if ($up) {
	echo '<script>
 	swal({   title: "Bien hecho",   text: "El prospecto fue rechazado!",   type: "success",   confirmButtonColor: "#4CAF50",   confirmButtonText: "ok!", }, function(isConfirm){   if (isConfirm) {    location.href="panel.php"; } });
 	</script>';
}else{
	echo '<script>
 	swal({   title: "Oops...",   text: "El prospecto no pudo ser rechazado!",   type: "error",   confirmButtonColor: "#DD6B55",   confirmButtonText: "ok!", }, function(isConfirm){   if (isConfirm) {    location.href="panel.php"; } });
 	</script>';
}
 ?>