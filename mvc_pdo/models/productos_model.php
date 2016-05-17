<?php

require_once 'classes/common.php';
require_once 'classes/crud_interface.php';

class productos_model extends common implements crud {

    public function __construct() {
        $this->db = conexion::conectar();
        $this->tabla = 'productos';
    }

    public function insertar() {
        $Nombre = filter_input(INPUT_POST, 'Nombre', FILTER_SANITIZE_MAGIC_QUOTES);
        $Codigo = filter_input(INPUT_POST, 'Codigo', FILTER_SANITIZE_MAGIC_QUOTES);
        $Precio = filter_input(INPUT_POST, 'Precio', FILTER_SANITIZE_MAGIC_QUOTES);

        $query = "INSERT INTO productos (Id, Nombre, Codigo, Precio) "
                . "VALUES (NULL, :Nombre, :Codigo, :Precio)";

        $resultado = $this->db->prepare($query);
        $resultado->bindParam(':Nombre', $Nombre, PDO::PARAM_STR);
        $resultado->bindParam(':Codigo', $Codigo, PDO::PARAM_STR);
        $resultado->bindParam(':Precio', $Precio, PDO::PARAM_INT);
        $resultado->execute();
    }

    public function borrar() {
        $id = filter_input(INPUT_POST, 'Id', FILTER_VALIDATE_INT);          
        if ($id !== FALSE) {
            $query = 'DELETE FROM productos WHERE Id = :id';
            $resultado = $this->db->prepare($query);
            $resultado->execute(array(':id'=>$id));
            
        }
    }

    public function actualizar() {
        $id     = filter_input(INPUT_POST, 'Id', FILTER_VALIDATE_INT);
        $Nombre = filter_input(INPUT_POST, 'Nombre', FILTER_SANITIZE_MAGIC_QUOTES);
        $Codigo = filter_input(INPUT_POST, 'Codigo', FILTER_SANITIZE_MAGIC_QUOTES);
        $Precio = filter_input(INPUT_POST, 'Precio', FILTER_SANITIZE_MAGIC_QUOTES);

        $query = "UPDATE productos SET Nombre = :Nombre, Codigo=:Codigo, "
                . " Precio=:Precio WHERE Id= :id";
        $resultado = $this->db->prepare($query);
        $resultado->bindParam(':Nombre', $Nombre, PDO::PARAM_STR);
        $resultado->bindParam(':Codigo', $Codigo, PDO::PARAM_STR);
        $resultado->bindParam(':Precio', $Precio, PDO::PARAM_INT);
        $resultado->bindParam(':id', $id, PDO::PARAM_INT);  
        $resultado->execute();
    }

    public function view_by_id() {
        
    }

}
