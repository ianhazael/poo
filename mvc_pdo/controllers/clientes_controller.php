<?php
require_once('models/clientes_model.php');
class clientes_controller {
    public static function ejecutar() {
        $clientes = new clientes_model();
        if (!empty($_POST)) {
            if (isset($_POST['insertarclientes'])) {
                $clientes->insertar();
            }
            if (isset($_POST['borrarclientes'])) {
                $clientes->borrar();
            }
            if (isset($_POST['actualizarclientes'])) {
                $clientes->actualizar();
            }
            header('location:/mvc_pdo/?controller=clientes');
        } else {
            if(isset($_GET['id'])){
                $cliente = $clientes->individual_by_id();
            }
            $arrClientes = $clientes->get_tabla();
            require 'views/clientes_view.php';
        }
    }
}
clientes_controller::ejecutar();
