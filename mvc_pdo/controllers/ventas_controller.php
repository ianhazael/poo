<?php

class ventas_controller {

    public static function ejecutar() {
        require_once('models/ventas_model.php');
        $ventas = new ventas_model();
        $arrVentas = $ventas->get_tabla();
        if (!empty($_POST)) {
            if (isset($_POST['insertarventas'])) {
                $ventas->insertar();
            }
            if (isset($_POST['borrarventa'])) {
                $ventas->borrar();
            }
            if (isset($_POST['actualizarventa'])) {
                $ventas->actualizar();
            }
            header('location:/mvc_pdo/?controller=ventas');
        } else {
            require 'views/ventas_view.php';
        }
    }
}
ventas_controller::ejecutar();
