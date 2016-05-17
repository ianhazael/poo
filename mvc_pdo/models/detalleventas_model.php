<?php

require_once 'classes/common.php';
require_once 'classes/crud_interface.php';

class detalleventas_model extends common implements crud {

    public function __construct() {
        $this->db = $this->conectar();
        $this->tabla = 'detalleventas';
    }

    public function insertar() {
        $Fecha      = filter_input(INPUT_POST, 'Fecha', FILTER_SANITIZE_MAGIC_QUOTES);
        $Cantidad   = filter_input(INPUT_POST, 'Cantidad', FILTER_SANITIZE_MAGIC_QUOTES);
        $Sub_Total  = filter_input(INPUT_POST, 'Sub_Total', FILTER_SANITIZE_MAGIC_QUOTES);
        $IVA        = filter_input(INPUT_POST, 'IVA', FILTER_SANITIZE_MAGIC_QUOTES);
        $Total      = filter_input(INPUT_POST, 'Total', FILTER_SANITIZE_MAGIC_QUOTES);
        $query = "INSERT INTO detalleventas (Id, Fecha, Cantidad, Sub_Total, IVA, Total) "
                . "VALUES (NULL, CURRENT_TIMESTAMP, :Cantidad, :Sub_Total, :IVA, :Total)";
        
        $resultado = $this->db->prepare($query);
        $resultado->bindParam(':Cantidad', $Cantidad, PDO::PARAM_INT);
        $resultado->bindParam(':Sub_Total', $Sub_Total, PDO::PARAM_INT);
        $resultado->bindParam(':IVA', $IVA, PDO::PARAM_INT);
        $resultado->bindParam(':Total', $Total, PDO::PARAM_INT);
        $resultado->execute();
    }

    public function borrar() {
        $id = filter_input(INPUT_POST, 'Id', FILTER_VALIDATE_INT);
        //var_dump($id);            
        if ($id !== FALSE) {
            $query = 'DELETE FROM detalleventas WHERE Id = :id';
            $resultado = $this->db->prepare($query);
            $resultado->execute(array(':id'=>$id));
        }
    }

    public function actualizar() {
        $id         = filter_input(INPUT_POST, 'Id', FILTER_VALIDATE_INT);
        $Fecha      = filter_input(INPUT_POST, 'Fecha', FILTER_SANITIZE_MAGIC_QUOTES);
        $Cantidad   = filter_input(INPUT_POST, 'Cantidad', FILTER_SANITIZE_MAGIC_QUOTES);
        $Sub_Total  = filter_input(INPUT_POST, 'Sub_Total', FILTER_SANITIZE_MAGIC_QUOTES);
        $IVA        = filter_input(INPUT_POST, 'IVA', FILTER_SANITIZE_MAGIC_QUOTES);
        $Total      = filter_input(INPUT_POST, 'Total', FILTER_SANITIZE_MAGIC_QUOTES);

        
        $query = "UPDATE detalleventas SET Fecha = '$Fecha', Cantidad='$Cantidad', Sub_Total='$Sub_Total', IVA='$IVA', Total='$Total' WHERE Id='$id'";
        
        $resultado = $this->db->prepare($query);
        $resultado->bindParam(':Fecha', $Fecha, PDO::PARAM_STR);
        $resultado->bindParam(':Cantidad', $Cantidad, PDO::PARAM_INT);
        $resultado->bindParam(':Sub_Total', $Sub_Total, PDO::PARAM_INT);
        $resultado->bindParam(':IVA', $IVA, PDO::PARAM_INT);
        $resultado->bindParam(':Total', $Total, PDO::PARAM_INT);
        $resultado->execute();
        
        //$consulta = $this->db->query($query);
    }

    public function view_by_id() {
        
    }
}