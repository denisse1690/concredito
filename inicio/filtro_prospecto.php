<?php include '../extend/header.php'; ?>
<div class="row">
        <div class="col s12 m12 l12">
          <div class="card ">
            <div class="card-content black-text">
              <span class="card-title black-text">BUSQUEDA DE PROSPECTOS</span>
              <form action="prospectos.php" class="form" autocomplete="off" method="post">
              <div class="row">
              <div class="col s6 m6 l6" >
              <select name="estatus" id="estatus" class="browser-default">
                <option disabled selected>ELIGE UNA OPCION</option>
                <option value="ENVIADO">ENVIADO</option>
                <option value="ACEPTADO">ACEPTADO</option>
                <option value="RECHAZADO">RECHAZADO</option>
              </select>
			        </div>
              <button type="submit" class="btn green" id="boton" >Buscar</button>
              <br>
              </form>
            </div>
          </div>
        </div>
</div>

            
<script>
  $("form").keypress(function(e) {
        if (e.which == 13) {
            return false;
        }
    });
$('.tooltipped').tooltip({delay: 50});
</script>

<?php include '../extend/footer.php'; ?>