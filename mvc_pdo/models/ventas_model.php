<?php
require_once 'classes/common.php';
require_once 'classes/crud_interface.php';

class ventas_model extends common implements crud {
    public function __construct() {
        $this->db = conexion::conectar();
        $this->tabla = 'ventas';
    }

    public function insertar() {
        $Precio_Unitario    = filter_input(INPUT_POST, 'Precio_Unitario', FILTER_SANITIZE_MAGIC_QUOTES);
        $Total              = filter_input(INPUT_POST, 'Total', FILTER_SANITIZE_MAGIC_QUOTES);

        $query = "INSERT INTO ventas (Id, Precio_Unitario, Total) "
                . "VALUES (NULL, :Precio_Unitario, :Total)";

        $resultado = $this->db->prepare($query); 
        $resultado->execute(array(':Precio_Unitario'=>$Precio_Unitario,
                                  ':Total'=>$Total));
    }

    public function borrar() {
        $id = filter_input(INPUT_POST, 'Id', FILTER_VALIDATE_INT);
        if ($id !== FALSE) {
            $query = 'DELETE FROM ventas WHERE Id = :id';
            $resultado = $this->db->prepare($query); 
            $resultado->execute(array(':id'=>$id));
        }
    }

    public function actualizar() {
        $id                 = filter_input(INPUT_POST, 'Id', FILTER_VALIDATE_INT);
        $Precio_Unitario    = filter_input(INPUT_POST, 'Precio_Unitario', FILTER_SANITIZE_MAGIC_QUOTES);
        $Total              = filter_input(INPUT_POST, 'Total', FILTER_SANITIZE_MAGIC_QUOTES);

        $query = "UPDATE ventas SET Precio_Unitario = :Precio_Unitario, Total=:Total WHERE Id=:id";
        $resultado = $this->db->prepare($query); 
        $resultado->execute(array(':Precio_Unitario'=>$Precio_Unitario,
                                  ':Total'=>$Total, ':id'=>$id));
    }

    public function view_by_id() {
        
    }

}
