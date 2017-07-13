<?php

/**
 * Autor Fernando García López, Dudas y/o sugerencias al correo furia2010598@hotmail.com
 * Nombre de la clase Galeria, version 1.0, creada el dia 9/07/2017 a las ,02:47:06 PM
 */
class Galeria {

    private $idGaleria;
    private $Titulo;
    private $Archivo;
    private $fechaPublicacion;
    private $Usuario;

    public function __construct() {
        $this->idGaleria = 0;
        $this->Titulo = '';
        $this->Archivo = '';
        $this->fechaPublicacion = '';
        $this->Usuario = NULL;
    }

    public function getIdGaleria() {
        return $this->idGaleria;
    }

    public function getTitulo() {
        return $this->Titulo;
    }

    public function getArchivo() {
        return $this->Archivo;
    }

    public function getFechaPublicacion() {
        return $this->fechaPublicacion;
    }

    public function getUsuario() {
        return $this->Usuario;
    }

    public function setIdGaleria($idGaleria) {
        $this->idGaleria = $idGaleria;
    }

    public function setTitulo($Titulo) {
        $this->Titulo = $Titulo;
    }

    public function setArchivo($Archivo) {
        $this->Archivo = $Archivo;
    }

    public function setFechaPublicacion($fechaPublicacion) {
        $this->fechaPublicacion = $fechaPublicacion;
    }

    public function setUsuario($Usuario) {
        $this->Usuario = $Usuario;
    }

}
