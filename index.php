<?php date_default_timezone_set('UTC'); ?>
<?php 
if (isset($_REQUEST['c'])) {
    
    require_once("controllers/".$_REQUEST['c']."Controller.php");
    $controller = $_REQUEST['c'] . 'Controller';
    $controller = new $controller;
    $action= $_REQUEST['a'];
    if($action == "vista"){
        $controller->vista(); 
    }
    elseif ($action == "actualizar") {
        $controller->Actualizar($_REQUEST['id']);
    }
     elseif ($action == "eliminar") {
        $controller->Eliminar($_REQUEST['id']);
    }


}
else {
    require_once("indexLista.php");
}
?>
