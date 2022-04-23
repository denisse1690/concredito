<?php 
function alerta_success($mensaje,$ruta)
{
	$alerta= '<script>
 	swal({   title: "Bien hecho",   text: "'.$mensaje.'",  type: "success",   confirmButtonColor: "#4CAF50",   confirmButtonText: "ok!", }, function(isConfirm){   if (isConfirm) {    location.href="'.$ruta.'"; } });
 	</script>';
return $alerta;
}

function alerta_error($mensaje,$ruta)
{
	$alerta= '<script>
 	swal({   title: "Oops...",   text: "'.$mensaje.'",   type: "error",   confirmButtonColor: "#DD6B55",   confirmButtonText: "ok!", }, function(isConfirm){   if (isConfirm) {    location.href="'.$ruta.'"; } });
 	</script>';
return $alerta;
}




 ?>