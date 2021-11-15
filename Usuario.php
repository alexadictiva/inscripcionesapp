<?php
require_once "./Conexion.php";


class Usuario extends ConexionPDO{
    private $id;
    private $nombre;
    private $email;
    private $pass;

    public function setId($id){
        $this->id = $id;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setPass($pass){
        $this->pass = $pass;
    }
   
    public function listar(){
        $this->query = "SELECT ID, Nombre, Email, Pass FROM usuario";
        return $this->getRegistros();
    }

    
    public function crear(){
        $this->query = "INSERT INTO `usuario`(`Nombre`, `Email`, `Pass`) VALUES(:nombre,:email, :pass)";
        $this->ejecutar(array(
            ":nombre" => $this->nombre,
            ":email" => $this->email,
            ":pass" => $this->pass,
            
        ));
    }

   public function borrar(){
        $this->query = "DELETE from `usuario` WHERE `Email` = :email";
        $this->ejecutar(array(
            ":email" => $this->email 
        ));
    }
    
}

