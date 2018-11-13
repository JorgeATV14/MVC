<?php

require_once "clases/conexion.php";
$obj= new conectar();
$conexion=$obj->conexion();

$sql="SELECT id,
nombre,
precio,
descripcion,
detalles
from servicio";
$result=mysqli_query($conexion,$sql);

?>

<div>
	<table class="table table-hover table-condensed" id="iddatatable">
		<center><thead style="background-color: #dc3545;color: white; font-weight: bold;">
			<tr>
				<td>NOMBRE</td>
				<td>PRECIO</td>
				<td>DETALLES</td>
				<td>ACTUALIZAR</td>
				<td>ELIMINAR</td>

			</tr>
		</thead></center>
		<tfoot style="background-color: #CCC;color: white; font-weight: bold;">
			<tr>
				<td>NOMBRE</td>
				<td>PRECIO</td>
				<td>DETALLES</td>
				<td>ACTUALIZAR</td>
				<td>ELIMINAR</td>
			</tr>
		</tfoot>
		<tbody>
			<?php 

			while ($mostrar=mysqli_fetch_row($result)) 
			{

				?>
				<tr>
					<td><?php echo $mostrar [1]  ?></td>
					<td><?php echo $mostrar [2]  ?></td>
					<
					<td><a href="http://localhost:8080/mvc/detalles.php"><span class="btn btn-primary btn-xs">mostrar<i class="fas fa-eye"></i></span></a><?php echo $mostrar [4]  ?></td>

					<td><a href="http://localhost:8080/mvc/index.php?c=servicio&&a=actualizar&&id=11"><span class="btn btn-warning btn-xs" ><i class="fas fa-trash-alt"></i> <?php echo $mostrar [3]?></span><a href=></a></td>
					<td><a href="http://localhost:8080/mvc/index.php?c=servicio&&a=eliminar&&id=11"><span class="btn btn-danger btn-xs"><i class="fas fa-edit"></i></span></a></td>
				</tr>
				<?php

			}

			?>
		</tbody>
	</table>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		$('#iddatatable').DataTable();
	} );
</script>