<?php
require_once 'classes/common.php';
require_once 'classes/crud_interface.php';
/**
 * El modelo cajeros_model extiende de la clase common la cual es una clase
 * abstracta que obliga a crear el metodo view_by_id; a la vez implementa la 
 * interface CRUD que obliga a crear los metodos insertar, borrar y actualizar
 */
class cajeros_model extends common implements crud {

    public function __construct() {
        $this->tabla = 'cajeros';
        $this->db = $this->conectar();
    }

    public function insertar() {
        $Nombres            = filter_input(INPUT_POST, 'Nombres', FILTER_SANITIZE_MAGIC_QUOTES);
        $Apellidos          = filter_input(INPUT_POST, 'Apellidos', FILTER_SANITIZE_MAGIC_QUOTES);
        $Fecha_Nacimiento   = filter_input(INPUT_POST, 'Fecha_Nacimiento', FILTER_SANITIZE_MAGIC_QUOTES);
        $Correo             = filter_input(INPUT_POST, 'Correo', FILTER_SANITIZE_MAGIC_QUOTES);
        $Telefono           = filter_input(INPUT_POST, 'Telefono', FILTER_SANITIZE_MAGIC_QUOTES);
        $Puesto             = filter_input(INPUT_POST, 'Puesto', FILTER_SANITIZE_MAGIC_QUOTES);
        $Fecha_Ingreso      = filter_input(INPUT_POST, 'Fecha_Ingreso', FILTER_SANITIZE_MAGIC_QUOTES);

        $query = "INSERT INTO cajeros (Id, Nombres, Apellidos, Fecha_Nacimiento, Correo, Telefono, Puesto, Fecha_Ingreso) "
                . "VALUES (NULL, :Nombres, :Apellidos, :Fecha_Nacimiento, "
                . ":Correo, :Telefono, :Puesto, CURRENT_TIMESTAMP)";
        
        $resultado = $this->db->prepare($query);
        $resultado->bindParam(':Nombres', $Nombres, PDO::PARAM_STR);
        $resultado->bindParam(':Apellidos', $Apellidos, PDO::PARAM_STR);
        $resultado->bindParam(':Fecha_Nacimiento', $Fecha_Nacimiento, PDO::PARAM_STR);
        $resultado->bindParam(':Correo', $Correo, PDO::PARAM_STR);
        $resultado->bindParam(':Telefono', $Telefono, PDO::PARAM_STR);
        $resultado->bindParam(':Puesto', $Puesto, PDO::PARAM_STR);
        $resultado->execute();
        //$consulta = $this->db->query($query);
    }

    public function borrar() {
        $id = filter_input(INPUT_POST, 'Id', FILTER_VALIDATE_INT);
        if ($id !== FALSE) {
            $query = 'DELETE FROM cajeros WHERE Id = :id';
            $resultado = $this->db->prepare($query);
            $consulta = $resultado->execute(array(":id" => $id));
        }
    }

    public function actualizar() {
        $id = filter_input(INPUT_POST, 'Id', FILTER_VALIDATE_INT);
        $Nombres = filter_input(INPUT_POST, 'Nombres', FILTER_SANITIZE_MAGIC_QUOTES);
        $Apellidos = filter_input(INPUT_POST, 'Apellidos', FILTER_SANITIZE_MAGIC_QUOTES);
        $Fecha_Nacimiento = filter_input(INPUT_POST, 'Fecha_Nacimiento', FILTER_SANITIZE_MAGIC_QUOTES);
        $Correo = filter_input(INPUT_POST, 'Correo', FILTER_SANITIZE_MAGIC_QUOTES);
        $Telefono = filter_input(INPUT_POST, 'Telefono', FILTER_SANITIZE_MAGIC_QUOTES);
        $Puesto = filter_input(INPUT_POST, 'Puesto', FILTER_SANITIZE_MAGIC_QUOTES);
        $Fecha_Ingreso = filter_input(INPUT_POST, 'Fecha_Ingreso', FILTER_SANITIZE_MAGIC_QUOTES);


        $query = "UPDATE cajeros SET "
                . "Nombres = :Nombres, "
                . "Apellidos=:Apellidos, "
                . "Fecha_Nacimiento=:Fecha_Nacimiento, "
                . "Correo=:Correo, "
                . "Telefono=:Telefono, "
                . "Puesto=:Puesto, "
                . "Fecha_Ingreso=:Fecha_Ingreso "
                . "WHERE Id = :id";

        $resultado = $this->db->prepare($query);
        $resultado->bindParam(':Nombres', $Nombres, PDO::PARAM_STR);
        $resultado->bindParam(':Apellidos', $Apellidos, PDO::PARAM_STR);
        $resultado->bindParam(':Fecha_Nacimiento', $Fecha_Nacimiento, PDO::PARAM_STR);
        $resultado->bindParam(':Correo', $Correo, PDO::PARAM_STR);
        $resultado->bindParam(':Telefono', $Telefono, PDO::PARAM_STR);
        $resultado->bindParam(':Puesto', $Puesto, PDO::PARAM_STR);
        $resultado->bindParam(':Fecha_Ingreso', $Fecha_Ingreso, PDO::PARAM_STR);
        $resultado->bindParam(':id', $id, PDO::PARAM_INT);
        $resultado->execute();

    }

    public function view_by_id() {
        $id = filter_input(INPUT_GET, 'Id', FILTER_VALIDATE_INT);
        if ($id !== FALSE) {
            $query = 'SELECT * FROM cajeros WHERE Id = :id';
            $resultado = $this->db->prepare($query);
            $consulta = $resultado->execute(array(":id" => $id));
            $return = $consulta->fetchAll();
            var_dump($return);
        }
    }

}
