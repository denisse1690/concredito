<?php 
include '../conexion/conexion.php';
$q = $_REQUEST['q'];
$sel = $con->query("SELECT * FROM prospectos WHERE id = '$q'");
if($f = $sel -> fetch_assoc()) {
}
 ?>
 <h5><?php echo $f['nombre'].' '.$f['app'].' '.$f['apm'] ?></h5>
<table class="striped responsive-table">
	<tr class="filter" >
		<td style="font-weight: bold;">CALLE</td>
		<td><?php echo $f['calle'] ?></td>
		<td style="font-weight: bold;">NUM EXT</td>
		<td><?php echo $f['num_ext'] ?></td>
	</tr>
	<tr class="filter" >
		<td style="font-weight: bold;">COLONIA</td>
		<td><?php echo $f['colonia'] ?></td>
		<td style="font-weight: bold;">CP</td>
		<td><?php echo $f['cp'] ?></td>
	</tr>
	<tr class="filter" >
		<td style="font-weight: bold;">TEL</td>
		<td><?php echo $f['tel'] ?></td>
		<td style="font-weight: bold;">RFC</td>
		<td><?php echo $f['rfc'] ?></td>
	</tr>
	<tr class="filter" >
		<td style="font-weight: bold;">ESTATUS</td>
		<td><?php echo $f['estatus'] ?></td>
		<td style="font-weight: bold;">USUARIO</td>
		<td><?php echo $f['usuario'] ?></td>
	</tr>
	<?php if ($f['estatus']=='RECHAZADO'): ?>
	<tr class="filter" >
		<td style="font-weight: bold;" colspan="2">COMENTARIO</td>
		<td colspan="2"><?php echo $f['comentario'] ?></td>
	</tr>
	<?php endif ?>
	
		
		
</table>
