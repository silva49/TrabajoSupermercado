<?php

require_once 'model/Tblcategorias_model.php';
class Tblcategorias_controller{

    private $model_categorias;

    public function __construct(){

        $this->model_categorias=new Tblcategorias_model();
    }
    public function modificar(){
        $id = $_REQUEST['id'];
        $consulta = $this->model_categorias->consultarporid("SELECT * FROM tblcategorias WHERE id=$id");
       
        require_once 'view/modificar_view.php';
    }

    public function menucategorias(){
        $consulta =  $this->model_categorias->consultarcategorias();
        require_once 'view/menucategorias.php';
    }

    public function guardarcategoria(){
        $dato['nombre']=$_POST["txtnombre"];
        $this->model_categorias->insertarcategoria($dato);
        $this->menucategorias();
    }
    public function guardarcambioscategoria(){
        $dato['id']  = $_POST["txtid"];
        $dato['nombre'] = $_POST["txtnombre"];
        $this->model_categorias->actualizarcategorias($dato);
        $this->menucategorias();
    }
    

}




?>