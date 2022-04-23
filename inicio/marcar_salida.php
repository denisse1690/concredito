<?php include '../extend/headerphp.php';
$id = htmlentities($_GET['id']);

$sel = $con->query("SELECT entrada,tipo FROM estancias WHERE id = '$id' ");
if($f = $sel -> fetch_assoc()) {
$entrada = $f['entrada'];
$tipo = $f['tipo'];
}

$inicio = new DateTime($entrada);
$fin   = new DateTime($f_act);
$dif  = $inicio->diff($fin);
$total = $dif->format("%i:");

$sel_cuota = $con->query("SELECT cuota FROM tipos WHERE tipo = '$tipo' ");
if($fc = $sel_cuota -> fetch_assoc()) {
$cuota = $fc['cuota'];
}
$tiempo = substr($total, 0, 2);
$cantidad = $tiempo*$cuota;


$up = $con->query("UPDATE estancias SET salida='$f_act',tiempo = '$tiempo', cantidad = '$cantidad' WHERE id = '$id' ");
 

if ($up) {


	echo '<script>
		location.href="cobro.php?id='.$id.'";
		</script>';
}else{
	echo '<script>
 	swal({   title: "Oops...",   text: "La salida de estancia no pudo ser marcada!",   type: "error",   confirmButtonColor: "#DD6B55",   confirmButtonText: "ok!", }, function(isConfirm){   if (isConfirm) {    location.href="index.php"; } });
 	</script>';
}

 ?>

