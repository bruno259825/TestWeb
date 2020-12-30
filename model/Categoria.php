<?php

require_once 'model/ModeloBase';

class Categoria extends ModeloBase{

    private $nombre;
    private $listaExamenes;

    function __construct($nombre) {
        $this->nombre=$nombre;
        $this->listaExamenes=array();
    }
    
    function getNombre() {
        return $this->nombre;
    }

    function getListaExamenes() {
        return $this->listaExamenes;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    


    
    
}

?>
