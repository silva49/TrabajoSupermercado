<?php


    class Tblventas_model{
       private $bd;
       private $tblventas;
     
        public function __construct(){
         $this->bd=conexion::getConexion();
         $this->tblventas = array();
        }
        public function insertventas($dato){
            $producto = $dato['producto'];
            $cantidad = $dato['cantidad'];
            $total = $dato['total'];
            $consulta ="INSERT INTO tblventas (idproducto, cantidad, total) VALUES ($producto, $cantidad, $total)";
            mysqli_query($this->bd,$consulta) or die ("error al guardar la venta");
    
        }
     
        public function consultaproductos(){
            $consulta=$this->bd->query("SELECT v.total, v.cantidad, v.idventa, c.nombre as 'categoria',p.nombre,p.precio from tblventas v inner join tblproductos p on v.idproducto=p.id INNER JOIN tblcategorias c ON c.id = p.idcategoria;");
            while($fila=$consulta->fetch_assoc()){
                $this->tblproductos[]=$fila;
            }
            return $this->tblproductos;
        }
        public function eliminarventas($id){
            $consulta = "DELETE  FROM tblventas WHERE idventa = $id";
            mysqli_query($this->bd, $consulta) or die ("Error al eliminar el dato.");
        }

    }
    

?>