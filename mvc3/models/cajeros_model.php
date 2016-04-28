<?php
require_once 'db/conexion.php';


class cajeros_model { // extends conexion{
    private $db;
    private $cajeros;
    //private 
    public function __construct(){
        //echo 'Aqui estoy en el modelo cajeros de la base de datos';
        $this->db = conexion::conectar();        
        $this->cajeros = array();
    }
    public function get_cajeros() {
        $query = 'select * from cajeros';
        //error_log($query);
        $consulta = $this->db->query($query);
        while($fila = $consulta->fetch_assoc()){
            $this->cajeros[] = $fila;
            //echo $fila['nombre'].'<br/>';
            //var_dump($fila);
        }
        return $this->cajeros;
    }
    public function insertar_cajero(){
        //var_dump($_POST);
        //die();
        //`id`, `nombre`, `apellido`, `telefono`, `direccion`, `correo`, `fecha_nacimiento`, `fecha_ingreso`, `ciudad`, `estado`, `pais``
        $nombre             = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_MAGIC_QUOTES);
        $apellido           = filter_input(INPUT_POST, 'apellido', FILTER_SANITIZE_MAGIC_QUOTES);
        $telefono           = filter_input(INPUT_POST, 'telefono', FILTER_SANITIZE_MAGIC_QUOTES);
        $direccion          = filter_input(INPUT_POST, 'direccion', FILTER_SANITIZE_MAGIC_QUOTES);
        $correo             = filter_input(INPUT_POST, 'correo', FILTER_SANITIZE_MAGIC_QUOTES);
        $fecha_nacimiento   = filter_input(INPUT_POST, 'fecha_nacimiento', FILTER_SANITIZE_MAGIC_QUOTES);
        $ciudad             = filter_input(INPUT_POST, 'ciudad', FILTER_SANITIZE_MAGIC_QUOTES);
        $estado             = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_MAGIC_QUOTES);
        $pais               = filter_input(INPUT_POST, 'pais', FILTER_SANITIZE_MAGIC_QUOTES);

        $query = "INSERT INTO cajeros (id, nombre, apellido, telefono, direccion, correo, fecha_nacimiento, fecha_ingreso, ciudad, estado, pais) "
                . "VALUES (NULL, '$nombre', '$apellido', '$telefono', '$direccion', "
                . "'$correo', '$fecha_nacimiento', CURRENT_TIMESTAMP, '$ciudad', '$estado', '$pais')";
        
        $consulta = $this->db->query($query);
        
    }

}