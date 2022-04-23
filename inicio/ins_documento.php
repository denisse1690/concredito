<?php include '../extend/headerphp.php';
$id = htmlentities($_POST['id']);
$nombre_doc = htmlentities($_POST['nombre_doc']);
$directorio = 'documentos/';
$ruta = $directorio.basename($_FILES['documento']['name']);
$archivo = basename($_FILES['documento']['name']);

$ins = $con->query("INSERT INTO documentos VALUES(DEFAULT,'$id','$nombre_doc','$archivo') ");
if ($ins) {
	if (move_uploaded_file($_FILES['documento']['tmp_name'], $ruta)) {
	echo '<script>
 	swal({   title: "Bien hecho",   text: "El documento fue cargado!",   type: "success",   confirmButtonColor: "#4CAF50",   confirmButtonText: "ok!", }, function(isConfirm){   if (isConfirm) {    location.href="documentos.php?id='.$id.'"; } });
 	</script>';
 }else{
 	echo '<script>
 	swal({   title: "Oops...",   text: "El documento no pudo ser cargado!",   type: "error",   confirmButtonColor: "#DD6B55",   confirmButtonText: "ok!", }, function(isConfirm){   if (isConfirm) {    location.href="documentos.php?id='.$id.'"; } });
 	</script>';
 }
}else{
	echo '<script>
 	swal({   title: "Oops...",   text: "El documento no pudo ser guardado!",   type: "error",   confirmButtonColor: "#DD6B55",   confirmButtonText: "ok!", }, function(isConfirm){   if (isConfirm) {    location.href="documentos.php?id='.$id.'"; } });
 	</script>';
}
 ?>