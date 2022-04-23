<?php include '../extend/header.php'; 
$id = htmlentities($_GET['id']);
?>

<div class="row">
        <div class="col s12">
          <div class="card ">
            <div class="card-content black-text">
              <span class="card-title black-text">RECHAZAR PROSPECTO</span>
				<form action="up_prospecto.php" method="post" autocomplete="off">
				<input type="hidden" name="id" value="<?php echo $id ?>">
				<label for="comentario">COMENTARIO</label>
				<textarea name="comentario" id="comentario" class="materialize-textarea" onblur="mayusculas(this.value,this.id)" class="may" ></textarea>
          		<button type="submit" class="btn green" id="boton" >ENVIAR</button>
					
				</form>
            </div>
          </div>
        </div>
      </div>



<?php include '../extend/footer.php'; ?>