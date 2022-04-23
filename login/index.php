<?php @session_start();
if(isset($_SESSION['tipo'])){
  if ($_SESSION["tipo"]=="ADMINISTRADOR") {
    header("location:../inicio/panel.php");
  }elseif ($_SESSION["tipo"]=="USUARIO") {
    header("location:../inicio");
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>EXAMEN DENISSE QUIÑONES</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="stylesheet" href="../css/materialize.css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <script type="text/javascript" src="../js/jquery.js"></script>
      <script src="../js/materialize.min.js"></script>
      <script src="../js/sweetalert-dev.js"></script>
      <link rel="stylesheet" href="../css/sweetalert.css">
 <style>
       body {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
    background-image: url("../img/1.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;

  }
  .login{
    opacity: 0.8;
  }

  main {
    flex: 1 0 auto;
  }
  .center-div
{
     margin: 0 auto;
     width: 50%; 
}
@media (max-width: 800px) {
     .center-div
{
     margin: 0 auto;
     width: 100%; 
}
}

   

    </style>
</head>
<body class="#f5f5f5 grey lighten-2" >
	<main>
	<nav class="green"></nav>
<br><br>
<div class="container" align="center">
		

    <div class="row center-div login green">
        <div class="col s12">
          <div class="card">
          <div class="row"><br>
          <img src="../img/logo.png" alt="" class="responsive-img" width="170" >
          </div>

            <div class="card-content black-text" >
              <form action="login.php" method="post" autocomplete="off" >
              <input type="text" placeholder="NOMBRE DE USUARIO" autofocus name="user"   pattern="[A-Za-z]{8,15}" required>
              <input type="password" placeholder="CLAVE" name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
              <button class="btn waves-effect waves-light green" type="submit" name="action">ENTRAR <i class="material-icons">send</i>
              </button>
              </form><br>
            </div>
          </div>
        </div>
        </div>
      </div>
	</main>
</body>
</html>