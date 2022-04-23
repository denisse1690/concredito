<?php @session_start();
 include '../conexion/conexion.php';
 ?>
 <!DOCTYPE html>
  <html>
    <head>
      <!--Import materialize.css-->
      <title>EXAMEN DENISSE QUIÑONES</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="stylesheet" href="../css/materialize.css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
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

 <?php 
$user = htmlentities($_POST['user']);
$pass = htmlentities($_POST['pass']);
$pass2 = sha1($pass);

$ins = $con ->query("SELECT * FROM usuarios WHERE user = '$user' AND pass = '$pass2' AND bloq = 'ACTIVO' ");
if($var = $ins->fetch_assoc()){
    $usuario = $var['user'];
    $contra = $var['pass'];
    $tipo = $var['tipo'];
    $name = $var['nombre'];
    $admin = $var['admin'];
}else{
	$usuario = "";
    $contra = "";
    $tipo = "";
}

if($usuario == $user && $contra == $pass2 && $tipo == "ADMINISTRADOR" ){
$_SESSION["admin"] = $user;
$_SESSION["tipo"] = $tipo;
$_SESSION["nombre"] = $name;
echo '<script>
  location.href="../inicio/panel.php";
  </script>';

}elseif ($usuario == $user && $contra == $pass2 && $tipo == "USUARIO" ) {
  $_SESSION["admin"] = $user;
  $_SESSION["tipo"] = $tipo;
  $_SESSION["nombre"] = $name;
echo '<script>
  location.href="../inicio";
  </script>';
}
else{
    echo '<script>
 	swal({   title: "Oops...",   text: "El nombre o contraseña de usuario no coincide!",   type: "error",   confirmButtonColor: "#DD6B55",   confirmButtonText: "ok!", }, function(isConfirm){   if (isConfirm) {    location.href="index.php"; } });
 	</script>';
}

?>

