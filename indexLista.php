<?php date_default_timezone_set('UTC'); ?>
<!DOCTYPE html>
<?php

if ((isset($_POST['nombre'])) && ($_POST['nombre'] != '') && (isset($_POST['precio'])) && ($_POST['precio'] != '') && (isset($_POST['descripcion']))) {

    include "models/modelo.php";
    $nuevo = new Service();
    $asd = $nuevo->setServicio($_POST['nombre'], $_POST['precio'],$_POST['descripcion']);
    echo "<script>window.location='/mvc/index.php?c=servicio&&a=vista'</script>";

}
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Ejemplo MVC con PHP</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
    <script src="ckeditor/ckeditor.js"></script>
    <script src="ckfinder/ckfinder.js"></script>

</head>
<body>
    <div class="container">
        <header class="text-center">
            
            <h1>Ejemplo mvc con PHP</h1>
            <hr/>
            <p class="lead">Creamos una base de datos de los servicios <br/>
                que podría realizar un taller y <br/>
            operamos con ella utilizando el paradigma MVC</p>
        </header>
        <div class="row">
            <div class="col-lg-15">

                <form action="#" method="post" class="col-lg-5">
                    <h3>Nuevo servicio</h3>                
                    Nombre: <input type="text" name="nombre" class="form-control"/>    
                    Precio: <input type="text" name="precio" class="form-control"/>    
                    <br/>
                    <br>
                    <br>
                    <textarea name="descripcion" id="editor1" cols="30" rows="10"></textarea>
                     <script type="text/javascript">
                         window.onload = function()
                         {
                            editor = CKEDITOR.replace("editor1");
                            CKFinder.setupCKEditor(editor, 'http://localhost:8080/mvc/ckeditor/ckfinder')
                         }
                     </script>
                     <br>
                    <input type="submit" value="Crear" class="btn btn-success"/>
                    </form>
           

            <br>
            <div class="col-lg-6 text-center">
                <hr/>
                <h3>Listado de servicios</h3>
                <a href="/mvc/index.php?c=servicio&&a=vista"><i class="fa fa-align-justify"></i> Acceder al listado de servicios</a>
                <div><a href="/mvc/indexServicios.php">ver Tabla de servicios</a></div>

                <hr/>
               
        
            <footer class="col-lg-12 text-center">

                Vigux.com.mx - <?php echo date("Y"); ?>
            </footer>
        </div>
    </body>
    </html>