<?php 
include '../conexion/conexion.php';
if (isset($_SESSION["admin"])){
$usuario = $_SESSION["admin"];
}
else {
   header("location:../index.php");
}
$ins = $con ->query("SELECT * FROM usuarios WHERE user = '$usuario'");
if($var = $ins->fetch_assoc()){
    $user = $var['user'];
    $id_usuario = $var['id'];
    $name = $var['nombre'];
    $tipo = $var['tipo'];
    $administrador = $var['admin'];
}
$fecha_actual= date("Y-m-d");
 ?>
<!DOCTYPE html>
  <html>
    <head>
      <!--Import materialize.css-->
      <title>EXAMEN DENISSE QUIÑONES</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
      <link rel="stylesheet" href="../css/materialize.css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <script type="text/javascript" src="../js/jquery.js"></script>
      <script src="../js/materialize.min.js"></script>
      <script src="../js/sweetalert-dev.js"></script>
      <script src="../js/jquery.jeditable.js"></script>
      <script src="../js/js.js"></script>
      <link rel="stylesheet" href="../css/sweetalert.css">
      <link rel="stylesheet" href="../css/estilos.css">
      
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

            .buscador{
              border: 5px;
              width: 98%;
              height: 50px;
              background-color: #BCAAA4;
              box-shadow: 1px 1px 1px 1px #bdbdbd;
              font-size: 20px;
              padding: 5px;
              padding-left: 20px;

            }
            .buscador:focus{
              background-color: white;
              border: white;
            }
        </style>
        <script language="Javascript"> 

document.oncontextmenu = function(){return false} 

</script>
    </head>
    <body class="#eeeeee grey lighten-3">
        <main>

        <?php
          if ($_SESSION["tipo"]=="ADMINISTRADOR") {
            include '../extend/menu.php'; 
            $hide = '';
          }elseif ($_SESSION["tipo"]=="USUARIO") {
            include '../extend/menu_usu.php'; 
            $hide = "style='display:none'";
          }else{
            $hide = "style='display:none'";
          }
          ?>
          