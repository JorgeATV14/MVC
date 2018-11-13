<!DOCTYPE html>
<html>
<head>
	<title></title>

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



</head>
<body>
	
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="card text-center">
					<div class="card-header">
						Tabla de Servicios
					</div>
					<div class="card-body">
						<a href="http://localhost:8080/mvc/index.php"><span  class="btn btn-primary">
                            Agregar nuevo servicio <i class="fas fa-plus-circle"></i>
                 
                        </span></a>
						<hr>
						<div id="tablaDatatable"></div>
					</div>
					 <center><a href="/mvc/index.php"> <i class="fa fa-arrow-circle-left"></i> Volver a la página principal</a></center> 
						<hr>
					<div class="card-footer text-muted">
						Hecho por jorge
					</div>
				</div>
			</div>
		</div>
	</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('#tablaDatatable').load('tabla.php');
    });
</script>
</body>
</html>

