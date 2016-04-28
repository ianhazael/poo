<?php
/**
 * Description of conexion
 *
 * @author hazael
 */
class conexion {
    public static function conectar(){
        $conexion = new mysqli('localhost','root', '','agenda');
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }
}
