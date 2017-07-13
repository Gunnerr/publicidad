<?php

/**
 * Autor Fernando García López, Dudas y/o sugerencias al correo furia2010598@hotmail.com
 * Nombre de la clase Slider, version 1.0, creada el dia 9/07/2017 a las ,02:14:16 PM
 */
class Slider {

    private $idSlider;
    private $Titulo;
    private $Descripcion;
    private $Archivo;
    private $fechaPublicacion;
    private $Usuario;
    private $Noticia;

    public function __construct() {
        $this->idSlider = 0;
        $this->Titulo = '';
        $this->Descripcion = '';
        $this->Archivo = '';
        $this->fechaPublicacion = '';
        $this->Usuario = NULL;
        $this->Noticia = 0;
    }

    public function getIdSlider() {
        return $this->idSlider;
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

    public function getNoticia() {
        return $this->Noticia;
    }

    public function setIdSlider($idSlider) {
        $this->idSlider = $idSlider;
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

    public function setNoticia($Noticia) {
        $this->Noticia = $Noticia;
    }

}
