<?php 
session_start();
$sesion = $_SESSION["admin"];
$sesion = $_SESSION["tipo"];
$sesion = $_SESSION["nombre"];

$_SESSION = array(); //vacia las variables de sesion
session_destroy();

header("location:../index.php");

 ?>