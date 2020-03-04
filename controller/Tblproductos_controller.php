<?php

require_once 'model/Tblproductos_model.php';
require_once 'model/Tblcategorias_model.php';
class Tblproductos_controller{

    private $model_productos;
    private $model_categorias;

    public function __construct(){

        $this->model_productos=new Tblproductos_model();
        $this->model_categorias=new Tblcategorias_model();
    }
    public function modificarproducto(){
        $id = $_REQUEST['id'];
        $consulta = $this->model_productos->consultarporid("SELECT * FROM tblproductos WHERE id=$id");
       
        require_once 'view/modificarproducto.php';
    }

    public function menuproductos(){
        $consultaproductos= $this->model_productos->consultaproductos();
        $consultacategorias= $this->model_categorias->consultarcategorias();
        require_once 'view/menuproductos.php';
    }
    public function guardarproducto(){
        $dato['idcategoria']=$_POST["selcategorias"];
        $dato['nombreproducto']=$_POST["txtnombre"];
        $dato['precio']=$_POST["txtprecio"];
        $this->model_productos->insertproductos($dato);
        $this->menuproductos();
    }
    public function guardarcambiosproducto(){
        $dato['id']  = $_POST["txtid"];
        $dato['nombre'] = $_POST["txtnombre"];
        $this->model_productos->actualizarproductos($dato);
        $this->menuproductos();
    }
    public function eliminarproductos(){
        $id = $_REQUEST['id'];
        $this->model_productos->eliminarproductos($id);
        $this->menuproductos();
    }
   

 
}




?>