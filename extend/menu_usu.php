<div>
<nav class="green">
    <div class="nav-wrapper">
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="../usuarios/editar_contra.php?id=<?php echo $id_usuario ?>" ><?php echo $_SESSION["admin"];?></a></li>
        <li><a href="#" onclick="swal({   title: '¿Seguro que desea salir?',   text: 'Al salir ningun dato sera guardado!',   type: 'warning',   showCancelButton: true,   confirmButtonColor: '#DD6B55',   confirmButtonText: 'Si, salir!', cancelButtonText: 'Cancelar' }, function(isConfirm){   if (isConfirm) { location.href='../login/salir.php'; }else{return false;} });">SALIR</a></li>
      </ul>
     
    </div>
    <ul class="side-nav" id="mobile-demo">
            
            <li><a href='../inicio' data-activates='config'>PANEL</a></li>
            <li><a href='../inicio/filtro_prospecto.php' data-activates='config'>BUSCAR</a></li>
            <li><a class='dropdown-button' href='#' data-activates='config'>CONFIGURACIÓN</a></li>
      </ul>
  </nav>
<!-- Navigation -->
<ul id="slide-out" class="side-nav fixed white">
<br>
<a href="#" class="brand-logo"><img src="../img/logo.png" width="180"></a><br><br><br><br><br>

<li><a class="black-text" href="../inicio"><button class="btn btn-floating green"><i class="material-icons">home</i></button> PANEL</a></li>

<li><a class="black-text" href='../inicio/filtro_prospecto.php'><button class="btn btn-floating green"><i class="material-icons">search</i></button> BUSCAR</a></li>


</ul>

<!-- mobil -->
 

<!-- DROPDOWNS -->


<ul id='config' class='dropdown-content'>
      <li><a href="../usuarios/editar_contra.php?id=<?php echo $id_usuario ?>"  ><?php echo $_SESSION["admin"];?></a></li>
      <li><a href="#" onclick="swal({   title: '¿Seguro que desea salir?',   text: 'Al salir ningun dato sera guardado!',   type: 'warning',   showCancelButton: true,   confirmButtonColor: '#DD6B55',   confirmButtonText: 'Si, salir!', cancelButtonText: 'Cancelar' }, function(isConfirm){   if (isConfirm) { location.href='../login/salir.php'; }else{return false;} });">SALIR</a></li>
  </ul>
