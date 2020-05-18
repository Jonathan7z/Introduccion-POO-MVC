<?php
class EnlacesPaginas{

public function enlacesPaginasModel($enlacesModel){


    if($enlacesModel == "inicio" ||
       $enlacesModel == "nosotros" ||
       $enlacesModel == "servicios" ||
       $enlacesModel == "contactenos"){
           $module = "vista/modulos/".$enlacesModel.".php";
       }

       

    return $module;

}

}


?>