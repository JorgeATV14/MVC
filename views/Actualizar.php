<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejemplo MVC con PHP</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <header class="text-center">
                <h1>Ejemplo MVC con PHP</h1>
                <hr/>
                <p class="lead">Creamos una base de datos de los servicios <br/>
                    que podría realizar un taller y <br/>
                    operamos con ella utilizando el paradigma MVC</p>
            </header>
            <div class="row">
                <div class="col-lg-6">

                    <form action="../index.php?c=servicio&&a=actualizar&&id=<?=$datos[0]['id']?>" method="post" class="col-lg-5">
                        <h3>Actualizar</h3>                
                        Nombre: <input type="text" name="nombre" value="<?=$datos[0]['nombre']?>"  class="form-control"/>    
                        Precio: <input type="text" name="precio" value="<?=$datos[0]['precio']?>" class="form-control"/>    
                        <br/>
                        <input type="submit" value="Actualizar" class="btn btn-success"/>
                    </form>
                </div>
                <div class="col-lg-6 text-center">
                    <hr/>
                    <h3>Listado de servicios</h3>
                    <a href="../index.php?c=servicio&&a=vista"><i class="fa fa-align-justify"></i> Acceder al listado de servicios</a>
                    <hr/>
                </div> 
            </div>
            <footer class="col-lg-12 text-center">
                Vigux.com.mx - <?php echo date("Y"); ?>
            </footer>
        </div>
    </body>
</html>