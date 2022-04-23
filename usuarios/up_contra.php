<?php include '../extend/headerphp.php';
$id = htmlentities($_POST['id']);
$pass = htmlentities($_POST['pass']);
$pass2= sha1($pass);
$up = $con -> query("UPDATE usuarios SET pass= '$pass2' WHERE id = '$id' ");
    if ($up) {
	echo '<script>
		location.href="index.php";
		</script>';
}else{
	echo '<script>
 	swal({   title: "Oops...",   text: "La contraseña no pudo ser actualizada!",   type: "error",   confirmButtonColor: "#DD6B55",   confirmButtonText: "ok!", }, function(isConfirm){   if (isConfirm) {    location.href="index.php"; } });
 	</script>';
}



 ?>

