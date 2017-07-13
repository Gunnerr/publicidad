<?php

/**
 * Autor Fernando García López, Dudas y/o sugerencias al correo furia2010598@hotmail.com
 * Nombre de la clase Descargas, version 1.0, creada el dia 9/07/2017 a las ,01:53:21 PM
 */
class Descargas {

    private $idDescarga;
    private $Categoria;
    private $Titulo;
    private $Descripcion;
    private $Archivo;
    private $fechaPublicacion;
    private $Usuario;

    public function __construct() {
        $this->idDescarga = 0;
        $this->Categoria = '';
        $this->Titulo = '';
        $this->Descripcion = '';
        $this->Archivo = '';
        $this->fechaPublicacion = '';
        $this->Usuario = NULL;
    }

    public function getIdDescarga() {
        return $this->idDescarga;
    }

    public function getCategoria() {
        return $this->Categoria;
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

    public function setIdDescarga($idDescarga) {
        $this->idDescarga = $idDescarga;
    }

    public function setCategoria($Categoria) {
        $this->Categoria = $Categoria;
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
