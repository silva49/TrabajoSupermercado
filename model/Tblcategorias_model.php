<?php


    class Tblcategorias_model{
       private $bd;
       private $tblcategorias;
     
        public function __construct(){

         $this->bd=conexion::getConexion();
         $this->tblcategorias = array();

        }
        public function insertarcategoria($dato){
            $nombre = $dato ['nombre'];
            $consulta = "INSERT INTO tblcategorias (nombre) VALUES ('$nombre')";
            mysqli_query($this->bd,$consulta) or die ("error al insertar la categoria");
        }

        public function consultarcategorias(){
            $consulta=$this->bd->query("SELECT * FROM tblcategorias");
            while($fila=$consulta->fetch_assoc()){
                $this->tblcategorias[]=$fila;
            }
            return $this->tblcategorias;



        }
        public function consultarporid($accion_sql){
            $consulta = $this->bd->query($accion_sql);
            $fila = $consulta->fetch_assoc();
            $this->tblcategorias[] = $fila;
            return $this->tblcategorias; 
        }
        public function actualizarcategorias($dato){
            $id = $dato['id'];
            $nombre = $dato['nombre'];
            $consulta = "UPDATE tblcategorias SET nombre = '$nombre' WHERE id = $id";
            mysqli_query($this->bd, $consulta) or die ("Error al actualizar los datos");
        }




    }


?>