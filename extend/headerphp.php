<?php include '../conexion/conexion.php';
if (isset($_SESSION["admin"])){
$usuario = $_SESSION["admin"];
}
else {
   header("location:../index.php");
}
$ins = $con ->query("SELECT * FROM usuarios WHERE user = '$usuario'");
if($var = $ins->fetch_assoc()){
    $user = $var['user'];
    $tipo = $var['tipo'];
    $name = $var['nombre'];
    $administrador = $var['admin'];
}
$f_act = date('Y-m-d H:i:s');
 ?>
<!DOCTYPE html>
  <html>
    <head>
      <!--Import materialize.css-->
      <title>EXAMEN DENISSE QUIÑONES</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="stylesheet" href="../css/materialize.css">
      <link href="../css/icon.css" rel="stylesheet">
      <script type="text/javascript" src="../js/jquery.js"></script>
      <script src="../js/materialize.min.js"></script>
      <script src="../js/sweetalert-dev.js"></script>
      <link rel="stylesheet" href="../css/sweetalert.css">
      
        <style>
            body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
            text-transform: uppercase; 
            }

            main {
            flex: 1 0 auto;
            }
            header, main, footer {
            padding-left: 240px;
            }

            @media only screen and (max-width : 992px) {
            header, main, footer {
            padding-left: 0;
            }
            }
        </style>
    </head>
    <body class="#eeeeee grey lighten-3">
        <main>

    