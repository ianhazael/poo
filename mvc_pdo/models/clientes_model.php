<?php

require_once 'classes/common.php';
require_once 'classes/crud_interface.php';

class clientes_model extends common implements crud{
    public function __construct() {
        $this->db = $this->conectar();
        $this->tabla = 'clientes';
    }
    public function insertar() {
        $Fecha_Creacion = filter_input(INPUT_POST, 'Fecha_Creacion', FILTER_SANITIZE_MAGIC_QUOTES);
        $RFC            = filter_input(INPUT_POST, 'RFC', FILTER_SANITIZE_MAGIC_QUOTES);
        $Nombres        = filter_input(INPUT_POST, 'Nombres', FILTER_SANITIZE_MAGIC_QUOTES);
        $Apellidos      = filter_input(INPUT_POST, 'Apellidos', FILTER_SANITIZE_MAGIC_QUOTES);
        $Direccion      = filter_input(INPUT_POST, 'Direccion', FILTER_SANITIZE_MAGIC_QUOTES);
        $Correo         = filter_input(INPUT_POST, 'Correo', FILTER_SANITIZE_MAGIC_QUOTES);
        $Ciudad         = filter_input(INPUT_POST, 'Ciudad', FILTER_SANITIZE_MAGIC_QUOTES);
        $Estado         = filter_input(INPUT_POST, 'Estado', FILTER_SANITIZE_MAGIC_QUOTES);
        $Pais           = filter_input(INPUT_POST, 'Pais', FILTER_SANITIZE_MAGIC_QUOTES);

        $query = "INSERT INTO clientes (Id, Fecha_Creacion, RFC, Nombres, Apellidos, Direccion, Correo, Ciudad, Estado, Pais) "
                . "VALUES (NULL, CURRENT_TIMESTAMP, :RFC, :Nombres, :Apellidos, :Direccion, "
                . ":Correo, :Ciudad, :Estado, :Pais)";

        $resultado = $this->db->prepare($query);
        $resultado->bindParam(':RFC', $RFC, PDO::PARAM_STR);
        $resultado->bindParam(':Nombres', $Nombres, PDO::PARAM_STR);
        $resultado->bindParam(':Apellidos', $Apellidos, PDO::PARAM_STR);
        $resultado->bindParam(':Direccion', $Direccion, PDO::PARAM_STR);
        $resultado->bindParam(':Correo', $Correo, PDO::PARAM_STR);
        $resultado->bindParam(':Ciudad', $Ciudad, PDO::PARAM_STR);
        $resultado->bindParam(':Estado', $Estado, PDO::PARAM_STR);
        $resultado->bindParam(':Pais', $Pais, PDO::PARAM_STR);
        $resultado->execute();
    }

    public function borrar() {
        $id = filter_input(INPUT_POST, 'Id', FILTER_VALIDATE_INT);
        if ($id !== FALSE) {
            $query = 'DELETE FROM clientes WHERE Id = :id';
            $resultado = $this->db->prepare($query);
            $consulta = $resultado->execute(array(":id" => $id));
        }
    }

    public function actualizar() {
        $id             = filter_input(INPUT_POST, 'Id', FILTER_VALIDATE_INT);
        $Fecha_Creacion = filter_input(INPUT_POST, 'Fecha_Creacion', FILTER_SANITIZE_MAGIC_QUOTES);
        $RFC            = filter_input(INPUT_POST, 'RFC', FILTER_SANITIZE_MAGIC_QUOTES);
        $Nombres        = filter_input(INPUT_POST, 'Nombres', FILTER_SANITIZE_MAGIC_QUOTES);
        $Apellidos      = filter_input(INPUT_POST, 'Apellidos', FILTER_SANITIZE_MAGIC_QUOTES);
        $Direccion      = filter_input(INPUT_POST, 'Direccion', FILTER_SANITIZE_MAGIC_QUOTES);
        $Correo         = filter_input(INPUT_POST, 'Correo', FILTER_SANITIZE_MAGIC_QUOTES);
        $Ciudad         = filter_input(INPUT_POST, 'Ciudad', FILTER_SANITIZE_MAGIC_QUOTES);
        $Estado         = filter_input(INPUT_POST, 'Estado', FILTER_SANITIZE_MAGIC_QUOTES);
        $Pais           = filter_input(INPUT_POST, 'Pais', FILTER_SANITIZE_MAGIC_QUOTES);

        $query = "UPDATE clientes SET Fecha_Creacion = :Fecha_Creacion, RFC=:RFC,"
                . " Nombres=:Nombres, Apellidos=:Apellidos, Direccion=:Direccion, "
                . " Correo=:Correo, Ciudad=:Ciudad, Estado=:Estado, Pais=:Pais "
                . " WHERE Id=:id";
      
        $resultado = $this->db->prepare($query);
        $resultado->bindParam(':Fecha_Creacion', $Fecha_Creacion, PDO::PARAM_STR);
        $resultado->bindParam(':RFC', $RFC, PDO::PARAM_STR);
        $resultado->bindParam(':Nombres', $Nombres, PDO::PARAM_STR);
        $resultado->bindParam(':Apellidos', $Apellidos, PDO::PARAM_STR);
        $resultado->bindParam(':Direccion', $Direccion, PDO::PARAM_STR);
        $resultado->bindParam(':Correo', $Correo, PDO::PARAM_STR);
        $resultado->bindParam(':Ciudad', $Ciudad, PDO::PARAM_STR);
        $resultado->bindParam(':Estado', $Estado, PDO::PARAM_STR);
        $resultado->bindParam(':Pais', $Pais, PDO::PARAM_STR);
        $resultado->bindParam(':id', $id, PDO::PARAM_INT);
        $resultado->execute();
    }

    public function view_by_id() {
        
    }

}
