<?php
require_once 'conexion/conexion.php';
require_once 'controller/Tblcategorias_controller.php';
require_once 'controller/Index_controller.php';
require_once 'controller/Tblproductos_controller.php';
require_once 'controller/Tblventas_controller.php';
$controller =new Index_controller();
$controller_categorias =new Tblcategorias_controller();
$controller_productos =new Tblproductos_controller();
$controller_ventas =new Tblventas_controller();

if(!empty($_REQUEST['accion'])){

    $metodo = $_REQUEST['accion'];
    switch($metodo){
        case method_exists($controller,$metodo):
            $controller->index();
        break;

        case method_exists($controller_categorias, $metodo):
            $controller_categorias->$metodo();
        break;
        case method_exists($controller_productos, $metodo):
            $controller_productos->$metodo();
        break;
        case method_exists($controller_ventas, $metodo):
            $controller_ventas->$metodo();
        break;

        default:
        $controller->index();

    }


}else{

    $controller->index();

}

?>