<?php include '../extend/headerphp.php';


$id = htmlentities($_REQUEST['id']);
$user = htmlentities($_REQUEST['user']);

$del = $con->query("DELETE FROM usuarios WHERE id = '$id' ");

if ($del) {
	echo '<script>
		location.href="index.php";
		</script>';
}else{
	echo '<script>
 	swal({   title: "Oops...",   text: "El usuario no pudo ser eliminado!",   type: "error",   confirmButtonColor: "#DD6B55",   confirmButtonText: "ok!", }, function(isConfirm){   if (isConfirm) {    location.href="index.php"; } });
 	</script>';
}

 ?>