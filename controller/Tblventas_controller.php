


<?php

require_once 'model/Tblproductos_model.php';
require_once 'model/Tblcategorias_model.php';
require_once 'model/Tblventas_model.php';

class Tblventas_controller{

    private $model_productos;
    private $model_categorias;
    private $model_ventas;

    public function __construct(){

        $this->model_productos=new Tblproductos_model();
        $this->model_categorias=new Tblcategorias_model();
        $this->model_ventas=new Tblventas_model();
    }

    public function menuventas(){
        $consultaproductos= $this->model_productos->consultaproductos();
        $consultacategorias= $this->model_categorias->consultarcategorias();
        $consultaventas = $this->model_ventas->consultaproductos();
        
        require_once 'view/menuventas.php';
    }
    public function guardarventa(){
        $dato['producto'] = $_POST['selproductos'];
        $dato['cantidad'] = $_POST['txtcantidad'];

        $precio = $this->model_productos->consultarporid("SELECT * FROM tblproductos WHERE id = " . $dato['producto']);
        $dato['total'] = $precio[0]['precio'] * $dato['cantidad'];
        $this->model_ventas->insertventas($dato);
        $this->menuventas();
    }
    public function eliminarventas(){
        $id = $_REQUEST['id'];
        $this->model_ventas->eliminarventas($id);
        $this->menuventas();
    }
   


 
}




?>