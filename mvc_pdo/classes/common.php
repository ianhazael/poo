<?php
require_once 'db/conexion.php';
/**
 * Clase abstracta, debe tener al menos un método abstracto "view_by_id"
 */
abstract class common extends conexion{
    /**
     * Atributos que serán heredados posteriormente a quienes utilicen common
     */
    protected $tabla;
    protected $db;
    
    /**
     * Método abastracto, significa que tendrá que ser implementado en los hijos
     */
    public abstract function view_by_id();
    
    /**
     * 
     * Método normal que será heredado en cada uno de los hijos, utiliza la
     * propiedad tabla que deberá estar inicializado en cada una de las clases
     * hijas
     */
    public function get_tabla() {
        $query = 'select * from '.$this->tabla;
        $consulta = $this->db->query($query);
        return $consulta->fetchAll();   //El fetchAll regresa array completo
    }
}