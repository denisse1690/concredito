<?php
$nombre = htmlentities($_REQUEST['nombre']);
header("Content-type: application/vnd.ms-excel; name='excel'");
header("Content-Disposition: filename=Reporte_".$nombre.".xls");
header("Pragma: no-cache");
header("Expires: 0");

echo $_POST['datos_a_enviar'];
?>