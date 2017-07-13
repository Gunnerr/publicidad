<?php

/**
 * Autor Fernando García López, Dudas y/o sugerencias al correo furia2010598@hotmail.com
 * Nombre de la clase Personal, version 1.0, creada el dia 9/07/2017 a las ,01:42:44 PM
 */
class Personal {

    private $idPersonal;
    private $Nombre;
    private $Cargo;
    private $Descripcion;
    private $Estatus;
    private $Correo;
    private $Usuario;

    public function __construct() {
        $this->idPersonal = 0;
        $this->Nombre = '';
        $this->Cargo = '';
        $this->Descripcion = '';
        $this->Estatus = '';
        $this->Correo = '';
        $this->Usuario = NULL;
    }

    public function getIdPersonal() {
        return $this->idPersonal;
    }

    public function getNombre() {
        return $this->Nombre;
    }

    public function getCargo() {
        return $this->Cargo;
    }

    public function getDescripcion() {
        return $this->Descripcion;
    }

    public function getEstatus() {
        return $this->Estatus;
    }

    public function getCorreo() {
        return $this->Correo;
    }

    public function getUsuario() {
        return $this->Usuario;
    }

    public function setIdPersonal($idPersonal) {
        $this->idPersonal = $idPersonal;
    }

    public function setNombre($Nombre) {
        $this->Nombre = $Nombre;
    }

    public function setCargo($Cargo) {
        $this->Cargo = $Cargo;
    }

    public function setDescripcion($Descripcion) {
        $this->Descripcion = $Descripcion;
    }

    public function setEstatus($Estatus) {
        $this->Estatus = $Estatus;
    }

    public function setCorreo($Correo) {
        $this->Correo = $Correo;
    }

    public function setUsuario($Usuario) {
        $this->Usuario = $Usuario;
    }

}
