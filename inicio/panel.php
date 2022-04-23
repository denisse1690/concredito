<?php 
include '../extend/header.php';
if ($_SESSION["tipo"]!="ADMINISTRADOR" ) {
  echo '<script>
  location.href="../index.php";
  </script>';
}
$sel_enviado = $con->query("SELECT id FROM prospectos WHERE estatus = 'ENVIADO' ");
$row_enviado = mysqli_num_rows($sel_enviado);
?>

<br>

<div class="row">

  <a href="prospectos.php?estatus=ENVIADO">
    <div class="col s14 m4 l4">
      <div class="card " data-position="bottom" >
        <div class="card-content black-text" align="center">
          <span class="card-title black-text"><i class="large material-icons brown-text tooltipped" data-delay="50" data-tooltip="<?php echo $row_enviado ?>">assignment_ind</i></span>
          <P>PROSPECTOS ENVIADOS: <?php echo $row_enviado ?> </P>
        </div>
      </div>
    </div>
  </a>

</div>



<?php include '../extend/footer.php'; ?>