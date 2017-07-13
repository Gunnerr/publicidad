<?php

/**
 * Autor Fernando García López, Dudas y/o sugerencias al correo furia2010598@hotmail.com
 * Nombre de la clase Noticias, version 1.0, creada el dia 9/07/2017 a las ,02:09:05 PM
 */
class Noticias {

    private $idNoticia;
    private $Titulo;
    private $Descripcion;
    private $Archivo;
    private $fechaPublicacion;
    private $Usuario;

    public function __construct() {
        $this->idNoticia = 0;
        $this->Titulo = '';
        $this->Descripcion = '';
        $this->Archivo = '';
        $this->fechaPublicacion = '';
        $this->Usuario = NULL;
    }
    
    public function getIdNoticia() {
        return $this->idNoticia;
    }

    public function getTitulo() {
        return $this->Titulo;
    }

    public function getDescripcion() {
        return $this->Descripcion;
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

    public function setIdNoticia($idNoticia) {
        $this->idNoticia = $idNoticia;
    }

    public function setTitulo($Titulo) {
        $this->Titulo = $Titulo;
    }

    public function setDescripcion($Descripcion) {
        $this->Descripcion = $Descripcion;
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
