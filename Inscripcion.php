<?php
require_once "./Conexion.php";


class Inscripcion extends ConexionPDO{
    private $id;
    private $nombre;
    
    public function setId($id){
        $this->id = $id;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function setCarrera($carrera){
        $this->carrera = $carrera;
    }
    
   
    public function listar(){
        $this->query = "SELECT ID, Nombre, Carrera FROM inscripcion";
        return $this->getRegistros();
    }
    
    public function crear(){
        $this->query = "INSERT INTO `inscripcion`(`Nombre`, `Carrera`) VALUES(:nombre, :carrera)";
        $this->ejecutar(array(
            ":nombre" => $this->nombre,
            ":carrera" => $this->carrera,
            
            
        ));
    }

   public function borrar(){
        $this->query = "DELETE from `inscripcion` WHERE `ID` = :id";
        $this->ejecutar(array(
            ":id" => $this->id          
        ));
    }
    
}