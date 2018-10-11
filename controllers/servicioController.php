<?php
    require_once("models/modelo.php");
    //require_once("../models/modelo.php");
    //$services = new Service();
    //require_once("../views/vista.php");
     class servicioController {

        private $services;
        private $datos;

        public function __construct() {
     		$this->services = new service();
			

     	}

     	public function Actualizar($id){
            
            $services = new Service();
            if(isset($_POST['nombre']) || isset($_POST['precio'])){
                $services->update($id,$_POST['nombre'],$_POST['precio']);
                echo "<script>window.location='../index.php?c=servicio&&a=vista'</script>";
            }
            
            $datos = $services->getServicio($id);
     	    require_once("views/Actualizar.php");

     	}

        public function Eliminar($id){
            
            if ($_GET['permitido'] == true){
                
                $services = new Service();
                $services->delete($id);
                echo "<script>window.location='../index.php?c=servicio&&a=vista'</script>";
            }
            else { 

                echo "
                <script>
                    if((confirm('Estas seguro que deseas eliminar este servicio!'))){
                        window.location='../index.php?c=servicio&&a=eliminar&&id=".$id."&&permitido=1';
                    }
                    else
                    {
                        window.location='../index.php?c=servicio&&a=vista';
                    }
                </script>";
            }
            

        }

        public function Vista(){

            $services = new Service();
            $datos = $services->getServicios();
            require_once("views/vista.php");

        }
     }
?>