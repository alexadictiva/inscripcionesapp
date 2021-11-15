<?php
require_once "./Conexion.php";


class Carrera extends ConexionPDO{
    private $id;
    private $nombre;
    private $detalle;
    public function setId($id){
        $this->id = $id;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function setDetalle($detalle){
        $this->detalle = $detalle;
    }
   
    public function listar(){
        $this->query = "SELECT ID, Nombre, Detalle FROM carrera";
        return $this->getRegistros();
    }
    
    public function crear(){
        $this->query = "INSERT INTO `carrera`(`Nombre`, `Detalle`) VALUES(:nombre,:detalle)";
        $this->ejecutar(array(
            ":nombre" => $this->nombre,
            ":detalle" => $this->detalle,
            
        ));
    }

   public function borrar(){
        $this->query = "DELETE from `carrera` WHERE `ID` = :id";
        $this->ejecutar(array(
            ":id" => $this->id          
        ));
    }
    
}

