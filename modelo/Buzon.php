<?php

/**
 * Autor Fernando García López, Dudas y/o sugerencias al correo furia2010598@hotmail.com
 * Nombre de la clase Buzon, version 1.0, creada el dia 9/07/2017 a las ,02:02:42 PM
 */
class Buzon {

    private $idBuzon;
    private $Remitente;
    private $Correo;
    private $Telefono;
    private $Mensaje;
    private $fechaEnvio;
    private $Estatus;
    private $Respuesta;
    private $fechaRespuesta;
    private $Usuario;

    public function __construct() {
        $this->idBuzon = 0;
        $this->Remitente = '';
        $this->Correo = '';
        $this->Telefono = '';
        $this->Mensaje = '';
        $this->fechaEnvio = '';
        $this->Estatus = '';
        $this->Respuesta = '';
        $this->fechaRespuesta = '';
        $this->Usuario = NULL;
    }

    public function getIdBuzon() {
        return $this->idBuzon;
    }

    public function getRemitente() {
        return $this->Remitente;
    }

    public function getCorreo() {
        return $this->Correo;
    }

    public function getTelefono() {
        return $this->Telefono;
    }

    public function getMensaje() {
        return $this->Mensaje;
    }

    public function getFechaEnvio() {
        return $this->fechaEnvio;
    }

    public function getEstatus() {
        return $this->Estatus;
    }

    public function getRespuesta() {
        return $this->Respuesta;
    }

    public function getFechaRespuesta() {
        return $this->fechaRespuesta;
    }

    public function getUsuario() {
        return $this->Usuario;
    }

    public function setIdBuzon($idBuzon) {
        $this->idBuzon = $idBuzon;
    }

    public function setRemitente($Remitente) {
        $this->Remitente = $Remitente;
    }

    public function setCorreo($Correo) {
        $this->Correo = $Correo;
    }

    public function setTelefono($Telefono) {
        $this->Telefono = $Telefono;
    }

    public function setMensaje($Mensaje) {
        $this->Mensaje = $Mensaje;
    }

    public function setFechaEnvio($fechaEnvio) {
        $this->fechaEnvio = $fechaEnvio;
    }

    public function setEstatus($Estatus) {
        $this->Estatus = $Estatus;
    }

    public function setRespuesta($Respuesta) {
        $this->Respuesta = $Respuesta;
    }

    public function setFechaRespuesta($fechaRespuesta) {
        $this->fechaRespuesta = $fechaRespuesta;
    }

    public function setUsuario($Usuario) {
        $this->Usuario = $Usuario;
    }

}
