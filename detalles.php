<?php

require_once "clases/conexion.php";
$obj= new conectar();
$conexion=$obj->conexion();

$sql="SELECT id,
descripcion
from servicio";
$result=mysqli_query($conexion,$sql);

?>
<link rel="stylesheet" type="text/css" href="librerias/bootstrap/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="librerias/cs/bootstrap.css">
<link rel="stylesheet" type="text/css" href="librerias/cs/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="librerias/alertify/css/alertify.css">
<link rel="stylesheet" type="text/css" href="librerias/alertify/css/themes/bootstrap.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/solid.css" integrity="sha384-osqezT+30O6N/vsMqwW8Ch6wKlMofqueuia2H7fePy42uC05rm1G+BUPSd2iBSJL" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/regular.css" integrity="sha384-4e3mPOi7K1/4SAx8aMeZqaZ1Pm4l73ZnRRquHFWzPh2Pa4PMAgZm8/WNh6ydcygU" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/brands.css" integrity="sha384-Px1uYmw7+bCkOsNAiAV5nxGKJ0Ixn5nChyW8lCK1Li1ic9nbO5pC/iXaq27X5ENt" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/fontawesome.css" integrity="sha384-BzCy2fixOYd0HObpx3GMefNqdbA7Qjcc91RgYeDjrHTIEXqiF00jKvgQG0+zY/7I" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script src="librerias/jquery.min.js"></script>
<script src="librerias/bootstrap/pooper.min.js"></script>
<script src="librerias/bootstrap/bootstrap.min.js"></script>
<script src="librerias/js/jquery.dataTables.min.js"></script>
<script src="librerias/js/dataTables.bootstrap4.min.js"></script>
<script src="librerias/alertify/alertify.js"></script>
<div>
	<table class="table table-hover table-condensed" id="iddatatable">
		<center><thead style="background-color: #dc3545;color: white; font-weight: bold;">
			<tr>
				<td>DESCRIPCION</td>
				

			</tr>
		</thead></center>
		<tfoot style="background-color: #CCC;color: white; font-weight: bold;">
			<tr>
				
				<td>DESCRIPCION</td>
			</tr>
		</tfoot>
		<tbody>
			<?php 

			while ($mostrar=mysqli_fetch_row($result)) 
			{

				?>
				<tr>
					<td><?php echo $mostrar [1]  ?></td>
					
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