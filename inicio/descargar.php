<?php 
$archivo = $_REQUEST['archivo'];
header ("Content-Disposition: attachment; filename=$archivo" ); 
header ("Content-Type: application/force-download"); 
readfile($archivo); 

 ?>