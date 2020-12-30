<?php

require_once 'model/ModeloBase';

class Examen extends ModeloBase{

    private $titulo;
    private $npreguntas;
    private $listaPreguntas;

    function __construct($titulo) {
        $this->titulo=$titulo;
        $this->listaPreguntas=array();
        $this->npreguntas=0;
    }
    
    function getTitulo() {
        return $this->titulo;
    }

    function getNpreguntas() {
        return $this->npreguntas;
    }

    function getListaPreguntas() {
        return $this->listaPreguntas;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setNpreguntas($npreguntas) {
        $this->npreguntas = $npreguntas;
    }

    function setListaPreguntas($listaPreguntas) {
        $this->listaPreguntas = $listaPreguntas;
    }

}

?>
