<?php

require_once 'model/ModeloBase.php';

class Alumno extends ModeloBase{

    private $username;
    private $nombre;
    private $email;
    private $password;
    private $categorias;
    
    function __construct($username,$nombre,$password,$email) {
        $this->username=$username;
        $this->password=$password;
        $this->email=$email;
        $this->nombre=$nombre;
        $this->categorias=array();
        
        
        parent::__construct();
    }
    
    function guardarAlumno($conexion){
        $resultado=$conexion->query("SELECT * FROM alumno");
        $error="";
        
        while($alumno=$resultado->fetch_object()){
            if($alumno->username==$this->username){
                $error="- Ese usuario ya existe";
            }
        }
        
        if(empty($error)){
            //INSERTO DATOS DE ALUMNO.
            $insert="INSERT INTO alumno VALUES(null,'{$this->username}','{$this->password}','{$this->nombre}','{$this->email}',sysdate());";
            if(!$conexion->query($insert)){
               //vista sin error
               $error="- Email ya registrado previamente";
            }
        }
        
        return $error;
    }
    

    function getUsername(){
        return $this->username;
    }

    function getNombre(){
        return $this->nombre;
    }

    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return $this->password;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function getCategorias() {
        return $this->categorias;
    }



}

?>
