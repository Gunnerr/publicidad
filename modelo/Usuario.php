<?php

/**
 * Autor Fernando García López, Dudas y/o sugerencias al correo furia2010598@hotmail.com
 * Nombre de la clase Usuario, version 1.0, creada el dia 9/07/2017 a las ,01:33:11 PM
 */
class Usuario {

    private $idUsuario;
    private $Usuario;
    private $Password;
    private $Nombre;
    private $Correo;
    private $Foto;
    private $Telefono;

    public function __construct() {
        $this->idUsuario = 0;
        $this->Usuario = '';
        $this->Password = '';
        $this->Nombre = '';
        $this->Correo = '';
        $this->Foto = '';
        $this->Telefono = '';
    }

    public function getIdUsuario() {
        return $this->idUsuario;
    }

    public function getUsuario() {
        return $this->Usuario;
    }

    public function getPassword() {
        return $this->Password;
    }

    public function getNombre() {
        return $this->Nombre;
    }

    public function getCorreo() {
        return $this->Correo;
    }

    public function getFoto() {
        return $this->Foto;
    }

    public function getTelefono() {
        return $this->Telefono;
    }

    public function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    public function setUsuario($Usuario) {
        $this->Usuario = $Usuario;
    }

    public function setPassword($Password) {
        $this->Password = $Password;
    }

    public function setNombre($Nombre) {
        $this->Nombre = $Nombre;
    }

    public function setCorreo($Correo) {
        $this->Correo = $Correo;
    }

    public function setFoto($Foto) {
        $this->Foto = $Foto;
    }

    public function setTelefono($Telefono) {
        $this->Telefono = $Telefono;
    }
    
    public function __toString() {
        return $this->Nombre;
    }

}
