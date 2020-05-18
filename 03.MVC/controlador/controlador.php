<?php
class MvcController{
    public function plantilla(){

        include "vista/template.php";
    }


    public function enlacesPaginasController(){
        $enlacesController = $_GET["action"];
        echo $enlacesController;
        $respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesController);
        include $respuesta;
    }
}
?>