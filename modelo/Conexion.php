<?php

/**
 * Autor Fernando García López, Dudas y/o sugerencias al correo furia2010598@hotmail.com
 * Nombre de la clase Conexion, version 1.0, creada el dia 13/07/2017 a las ,11:20:04 AM
 */
class Conexion {

    public static function getConexion() {
        $conexion = new mysqli('localhost', 'root', 'admin', 'cobach_pub');
        if ($conexion->connect_errno) {
            throw new Exception(" " . $conexion->connect_error);
        }
        $conexion->set_charset("utf8");
        return $conexion;
    }

}
